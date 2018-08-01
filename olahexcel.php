<?php


include "connect.php";
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

date_default_timezone_set('Europe/London');


require_once dirname(__FILE__) . '\PHPExcel\Classes\PHPExcel\IOFactory.php';



//echo date('H:i:s') , " Load from Excel2007 file" , EOL;
$callStartTime = microtime(true);

$objPHPExcel = PHPExcel_IOFactory::load($_FILES["file"]["tmp_name"]);

$callEndTime = microtime(true);
$callTime = $callEndTime - $callStartTime;
//echo 'Call time to read Workbook was ' , sprintf('%.4f',$callTime) , " seconds" , EOL;
// Echo memory usage
//echo date('H:i:s') , ' Current memory usage: ' , (memory_get_usage(true) / 1024 / 1024) , " MB" , EOL;


//echo date('H:i:s') , " Write to Excel2007 format" , EOL;
$callStartTime = microtime(true);

$sheet = $objPHPExcel->getSheet(0); 
$highestRow = $sheet->getHighestRow(); 
$highestColumn = $sheet->getHighestColumn();

//  Loop through each row of the worksheet in turn
function formattanggal($tgl)
{
	$aTgl=explode("/",$tgl);
	return $aTgl[2]."-".$aTgl[1]."-".$aTgl[0];
}
for ($row = 2; $row <= $highestRow; $row++){ 
    //  Read a row of data into an array
    $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                    NULL,
                                    TRUE,
                                    FALSE);
    //print_r($rowData);
    $nama=$rowData[0][3];
    $tgl=$rowData[0][5];
    $clockIn=$rowData[0][9];
    $clockOut=$rowData[0][10];
    //echo $nama.",". $tgl .",". $clockIn.",". $clockOut."<br/>";
    $q="SELECT * FROM staf WHERE NAMA_STAF='". $nama."'";
    //echo $q;
    $res=mysqli_query($con,$q);
    if ($rowH=mysqli_fetch_assoc($res))
    {
    	$idstaf=$rowH["ID_STAF"];
    	$tglF=formattanggal($tgl);
    	$q="DELETE FROM absen WHERE ID_STAF='". $idstaf."' AND Tanggal='". $tglF ."'";
    	mysqli_query($con,$q);

    	if ($clockOut=="00:00:00" || $clockOut=="")
    	{
    		$clockOut="18:00:00";
    	}
    	$q="INSERT INTO absen (ID_STAF,Tanggal,JamMasuk,JamKeluar) VALUES ('". $idstaf ."','". $tglF ."','". $clockIn ."','". $clockOut ."')";
    
    	mysqli_query($con,$q);
    	//echo $q."<br/>";
        header("location:importexcel.php");
    }
    //  Insert row data array into your database of choice here
}


/*
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save(str_replace('.php', '.xlsx', __FILE__));

$callEndTime = microtime(true);
$callTime = $callEndTime - $callStartTime;

echo date('H:i:s') , " File written to " , str_replace('.php', '.xlsx', pathinfo(__FILE__, PATHINFO_BASENAME)) , EOL;
echo 'Call time to write Workbook was ' , sprintf('%.4f',$callTime) , " seconds" , EOL;
// Echo memory usage
echo date('H:i:s') , ' Current memory usage: ' , (memory_get_usage(true) / 1024 / 1024) , " MB" , EOL;


// Echo memory peak usage
echo date('H:i:s') , " Peak memory usage: " , (memory_get_peak_usage(true) / 1024 / 1024) , " MB" , EOL;

// Echo done
echo date('H:i:s') , " Done writing file" , EOL;
echo 'File has been created in ' , getcwd() , EOL;
*/
?>

<?php
    /*
    $lFileName="";
	if (isset($_FILES["file"])) 
	{
							 $name = $_FILES["file"]["name"];
							 $ext = end((explode(".", $name))); # extra () to prevent notice

							 $fname=randomString();
							 $set="UpPict/".$fname.".".$ext;
							 $lFileName=$fname.".".$ext;
							 $ttl=0;
							 while (file_exists($set))
							 {
							  $set="UpPict/".$fname.$ttl.".".$ext;
							  $lFileName=$fname.$ttl.".".$ext;
							 }		 
							 
							 $ttl++;
							 
							 move_uploaded_file($_FILES["file"]["tmp_name"],$set);
						     if ($ext=="")
							 {
							   $lFileName="";
							 }
	}*/
?>
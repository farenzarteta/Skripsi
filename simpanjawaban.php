<?php
	include "connect.php";
  $idstaff=$_POST["idstaff"];
  $periode=$_POST["periode"];
  $pertanyaan=$_POST["id"];
  $penilaian=$_POST["penilaian"];
  $saran=$_POST["saran"];

  $ideval="";
  $q="SELECT * FROM evaluasi_kinerja WHERE ID_PERIODE='". $periode ."' AND ID_STAF='$idstaff'";
  $res=mysqli_query($con,$q);
  if ($row=mysqli_fetch_assoc($res))
  {
    $ideval=$row["ID_EVALUASI_KINERJA"];
    $q="UPDATE evaluasi_kinerja SET SARAN='$saran' WHERE ID_EVALUASI_KINERJA='$ideval'";
    mysqli_query($con,$q);
  }
  else {
    $q="INSERT INTO evaluasi_kinerja (ID_PERIODE,ID_STAF,TGL_EVALUASI,SARAN) ".
       "VALUES ('$periode','$idstaff',SYSDATE(),'$saran')";
    mysqli_query($con,$q);
    $ideval=mysqli_insert_id($con);
  }

  $q="DELETE FROM detail_evaluasi_kinerja WHERE ID_EVALUASI_KINERJA='". $ideval ."'";
  mysqli_query($con,$q);

  for ($i=0;$i<count($penilaian);$i++)
  {
      $q="INSERT INTO detail_evaluasi_kinerja (ID_EVALUASI_KINERJA,ID_PERTANYAAN_PERIODE,JAWABAN) ". 
         "VALUES ('$ideval','". $pertanyaan[$i] ."','".$penilaian[$i]."')";
      mysqli_query($con,$q);
  }
  header("location:evaluasistaf.php");
?>

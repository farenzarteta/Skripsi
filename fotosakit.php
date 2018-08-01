<?php
include "connect.php";
function getFoto($idx)
{
  if (isset($_FILES[$idx])) 
  {
               $name = $_FILES[$idx]["name"];
             $namaF=explode(".",$name);
               $ext = end($namaF); # extra () to prevent notice
                
               
               $fname=$namaF[0];
               $set="images/".$fname.".".$ext;
               $gambar=$fname.".".$ext;
               $ttl=0;
               while (file_exists($set))
               {
              $set="images/".$fname.$ttl.".".$ext;
                $gambar=$fname.$ttl.".".$ext;

                 $ttl++;
               }     
               
               
               move_uploaded_file($_FILES[$idx]["tmp_name"],$set);
                 if ($ext=="")
               {
                 $gambar="";
               }
  }
}

	$gambar=getFoto("file");
	$q="SELECT * FROM pengajuan_sakit";
	$res=mysqli_query($con,$q);
	$row=mysqli_fetch_array($res);
		?>
		  <img src="/web/images/<?php echo $row["path"];?>"> 
		<?php
?>
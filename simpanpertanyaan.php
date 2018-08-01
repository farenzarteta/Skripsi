<?php
	include "connect.php";
  $id=$_POST["id"];
  $pertanyaan=$_POST["pertanyaan"];

  echo $id;
  echo "<br/><br/>";
  print_r($pertanyaan);

  $q="DELETE FROM pertanyaan_periode WHERE ID_PERIODE='". $id ."'";
  mysqli_query($con,$q);

  for ($i=0;$i<count($pertanyaan);$i++)
  {
    $q="INSERT INTO pertanyaan_periode (ID_PERIODE,ID_PERTANYAAN) VALUES ('$id','". $pertanyaan[$i] ."')";
    mysqli_query($con,$q);


  }

  header("location:evaluasi.php");
?>

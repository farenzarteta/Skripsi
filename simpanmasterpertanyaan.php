<?php
	include "connect.php";
  $pertanyaan=$_POST["pertanyaan"];

  $q="INSERT INTO pertanyaan (PERTANYAAN) VALUES ('$pertanyaan')";
  mysqli_query($con,$q);
  //echo $q;
  header("location:pertanyaan.php");
?>
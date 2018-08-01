<?php
  include "connect.php";
  $id=$_GET["id"];
  $by=$_GET["by"];
  $tablename=$_GET["tablename"];
  $q="DELETE FROM $tablename WHERE $by='$id'";
  mysqli_query($con,$q);
  header("location:jadwalshift.php");
?>
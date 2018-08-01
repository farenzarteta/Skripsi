<?php
  include "connect.php";
  $id=$_GET["id"];
  $q="DELETE FROM jabatan WHERE id_jabatan='$id'";
  mysqli_query($con,$q);
  header("location:jabatan.php");
?>
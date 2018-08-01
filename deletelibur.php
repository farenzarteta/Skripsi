<?php
  include "connect.php";
  $id=$_GET["id"];
  $q="DELETE FROM hari_libur WHERE ID_HARILIBUR='$id'";
  mysqli_query($con,$q);
  header("location:harilibur.php");
?>
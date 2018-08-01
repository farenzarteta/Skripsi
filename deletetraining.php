<?php
  include "connect.php";
  $id=$_GET["id"];
  $q="DELETE FROM training WHERE ID_TRAINING='$id'";
  mysqli_query($con,$q);
  header("location:training.php");
?>
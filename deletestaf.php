<?php
  include "connect.php";
  $id=$_GET["id"];
  $q="DELETE FROM staf WHERE ID_STAF='$id'";
  mysqli_query($con,$q);
  header("location:liststaf.php");
?>
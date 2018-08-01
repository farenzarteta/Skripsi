<?php
  include "connect.php";
  $id=$_GET["id"];
  $q="DELETE FROM user_staf WHERE ID_USER='$id'";
  mysqli_query($con,$q);
  header("location:hakakes.php");
?>
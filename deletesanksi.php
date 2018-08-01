<?php
  include "connect.php";
  $id=$_GET["id"];
  $q="DELETE FROM sanksi WHERE ID_SANKSI='$id'";
  mysqli_query($con,$q);
  header("location:sanksi.php");
?>
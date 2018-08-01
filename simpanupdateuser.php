<?php
	include "connect.php";
	$id=$_POST['id'];
	$id_staf = $_POST['id_staf'];
	$id_jabatan = $_POST['id_jabatan'];
	$username =$_POST['username'];
	$password =$_POST['password']; 

	$q="UPDATE user_staf SET ID_STAF='$id_staf',ID_JABATAN='$id_jabatan',USERNAME='$username',PASSWORD='$password' WHERE ID_USER='$id'";
	mysqli_query($con,$q);
	//echo $q;
	header("location:hakakses.php");	
?>
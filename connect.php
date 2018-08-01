<?php

if(!isset($_SESSION)){ 
    session_start();
}

$con=mysqli_connect("localhost","root","biliton123");
mysqli_select_db($con,"dapurcoklat");

?>

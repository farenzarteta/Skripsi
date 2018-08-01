 <?php
        include "connect.php";

        $id=$_GET['id'];


        $q="UPDATE pengajuan_lembur SET STATUS='Approve' WHERE ID_LEMBUR='$id'";
        //echo $q;
        mysqli_query($con,$q);
        header("location:lemnburadmin.php");
?>a
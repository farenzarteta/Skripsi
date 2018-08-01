 <?php
        include "connect.php";

        $id=$_GET['id'];


        $q="UPDATE pengajuan_cuti SET STATUS='Approved' WHERE ID_CUTI='$id'";
        //echo $q;
        mysqli_query($con,$q);
        header("location:cutiadmin.php");
?>
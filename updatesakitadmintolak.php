 <?php
        include "connect.php";

        $id=$_GET['id'];


        $q="UPDATE pengajuan_sakit SET STATUS_='Not Approve' WHERE ID_SAKIT='$id'";
        //echo $q;
        mysqli_query($con,$q);
        header("location:sakitadmin.php");
?>
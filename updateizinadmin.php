 <?php
        include "connect.php";

        $id=$_GET['id'];


        $q="UPDATE pengajuan_izin SET STATUS='Approve' WHERE ID_IZIN='$id'";
        //echo $q;
        mysqli_query($con,$q);
        header("location:izinadmin.php");
?>
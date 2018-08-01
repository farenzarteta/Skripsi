 <?php
        include "connect.php";
        $id=$_POST['id'];
        $jabatan = $_POST['nama_jabatan'];

        $q="UPDATE jabatan SET NAMA_JABATAN='$jabatan' WHERE ID_JABATAN='$id'";
        echo $q;
        mysqli_query($con,$q);
        header("location:jabatan.php");
?>
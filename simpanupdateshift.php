 <?php
        include "connect.php";
        $id=$_POST['id'];
        $nama_shift = $_POST['nama_shift'];
        $jam_masuk = $_POST['jam_masuk'];
        $jam_keluar = $_POST['jam_keluar'];

        $q="UPDATE shift SET NAMA_SHIFT='$nama_shift',JAM_MASUK_SHIFT='$jam_masuk',JAM_KELUAR_SHIFT='$jam_keluar' WHERE ID_SHIFT='$id'";
        //echo $q;
        mysqli_query($con,$q);
        header("location:shift.php");
?>
 <?php
        include "connect.php";
        $nama_shift = $_POST['nama_shift'];
        $jam_masuk = $_POST['jam_masuk'];
        $jam_keluar = $_POST['jam_keluar'];
        $q="INSERT INTO shift (NAMA_SHIFT,JAM_MASUK_SHIFT,JAM_KELUAR_SHIFT) VALUES ('$nama_shift','$jam_masuk','$jam_keluar') ";
        //echo $q;
        mysqli_query($con,$q);
        header("location:shift.php");
?>
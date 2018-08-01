 <?php
        include "connect.php";
        $tgl_libur = $_POST['tgl_libur'];
        $keterangan = $_POST['keterangan'];
        $q="INSERT INTO hari_libur (TGL_HARILIBUR,KET_HARILLIBUR) VALUES ('$tgl_libur','$keterangan') ";
        
        mysqli_query($con,$q);
        header("location:harilibur.php");
?>
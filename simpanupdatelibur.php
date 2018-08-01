 <?php
        include "connect.php";
        $keterangan = $_POST['keterangan'];
        $q="INSERT INTO hari_libur (KET_HARILLIBUR) VALUES ('$keterangan') ";
        
        mysqli_query($con,$q);
        header("location:hari_libur.php");
?>
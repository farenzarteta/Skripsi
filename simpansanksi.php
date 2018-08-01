 <?php
        include "connect.php";
        $id_staf = $_POST['id_staf'];
        $tgl_sanksi = $_POST['tgl_sanksi'];
        $keterangan = $_POST['keterangan'];

        $q="INSERT INTO sanksi (ID_STAF,TGL_SANKSI,KETERANGAN_SANKSI) VALUES ('$id_staf','$tgl_sanksi','$keterangan')";
        //echo $q;
        mysqli_query($con,$q);
        header("location:sanksi.php");
?>
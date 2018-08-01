 <?php
        include "connect.php";
        $nama = $_POST['nama'];
        $tgl_start = $_POST['tgl_start'];
        $tgl_finish = $_POST['tgl_finish'];

        $q="INSERT INTO periode_evaluasi (TGL_START,TGL_FINISH,NAMA) VALUES ('$tgl_start','$tgl_finish','$nama')";
        //echo $q;
        mysqli_query($con,$q);
        header("location:evaluasi.php");
?>
 <?php
        include "connect.php";
        $id_staf = $_POST['id_staf'];
        $nama_training = $_POST['nama_training'];
        $lokasi_training = $_POST['lokasi_training'];
        $tgl_brgkat_training = $_POST['tgl_brgkat_training'];
        $tgl_plg_training = $_POST['tgl_plg_training'];
        $transport_training = $_POST['transport_training'];
        $nominal_transport = $_POST['nominal_transport'];
        $akomodasi_training = $_POST['akomodasi_training'];
        $nominal_akomodasi = $_POST['nominal_akomodasi'];

        $q="INSERT INTO training (ID_STAF,NAMA_TRAINING,LOKASI_TRAINING,TGL_BRGKAT_TRAINING,TGL_PLG_TRAINING,TRANSPORT_TRAINING,NOMINAL_TRANSPORT,AKOMODASI_TRAINING,NOMINAL_AKOMODASI) VALUES ('$id_staf','$nama_training','$lokasi_training','$tgl_brgkat_training','$tgl_plg_training','$transport_training','$nominal_transport','$akomodasi_training','$nominal_akomodasi')";
        //echo $q;
        mysqli_query($con,$q);
        header("location:training.php");
?>
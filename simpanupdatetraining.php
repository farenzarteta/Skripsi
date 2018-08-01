 <?php
        include "connect.php";
        $id=$_POST['id'];
        //echo $id;
        $id_staf = $_POST['id_staf'];
        $nama_training = $_POST['nama_training'];
        $lokasi_training = $_POST['lokasi_training'];
        $tgl_brgkat_training = $_POST['tgl_brgkat_training'];
        $tgl_plg_training = $_POST['tgl_plg_training'];
        $transport_training = $_POST['transport_training'];
        $nominal_transport = $_POST['nominal_transport'];
        $akomodasi_training = $_POST['akomodasi_training'];
        $nominal_akomodasi = $_POST['nominal_akomodasi'];

        $q="UPDATE training SET ID_STAF='$id_staf',NAMA_TRAINING='$nama_training',LOKASI_TRAINING='$lokasi_training',TGL_BRGKAT_TRAINING='$tgl_brgkat_training',TGL_PLG_TRAINING='$tgl_plg_training',TRANSPORT_TRAINING='$transport_training',NOMINAL_TRANSPORT='$nominal_transport',AKOMODASI_TRAINING='$akomodasi_training',NOMINAL_AKOMODASI='$nominal_akomodasi' WHERE ID_TRAINING='$id'";
        echo $q;
        mysqli_query($con,$q);
        header("location:training.php");
?>
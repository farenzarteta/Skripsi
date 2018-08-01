 <?php
        include "connect.php";
        $id=$_POST['id'];
        //echo $id;
        $id_staf = $_POST['id_staf'];
        $tgl_sanksi = $_POST['tgl_sanksi'];
        $keterangan = $_POST['keterangan'];

        $q="UPDATE sanksi SET ID_STAF='$id_staf',TGL_SANKSI='$tgl_sanksi',KETERANGAN_SANKSI='$keterangan' WHERE ID_SANKSI='$id'";
        echo $q;
        mysqli_query($con,$q);
        header("location:sanksi.php");
?>
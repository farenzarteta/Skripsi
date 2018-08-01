 <?php
        include "connect.php";
        $id_staf = $_POST['id_staf'];
        $ktp = $_POST['ktp'];
        $kawin = $_POST['kawin'];
        $pangkat = $_POST['pangkat'];
        $anak = $_POST['anak'];
        $pasfoto = $_POST['pasfoto'];
        $susunankeluarga = $_POST['susunankeluarga'];
        $skp = $_POST['skp'];
        $pidana = $_POST['pidana'];

        $q="INSERT INTO pensiun (ID_STAF_FOTOCOPY_KTP,FOTOCOPY_AKTA_PERKAWINAN_PEN,FOTOCOPY_KENAIKAN_PANGKAT_PEN,FOTOCOPY_AKTA_ANAK_PEN,PAS_PHOTO_PEN,DAFTAR_SUSUNAN_KELUARGA_PEN,FOTOCOPY_SKP_PEN,_FOTOCOPY_SURAT_KETERANGAN_PIDANA) VALUES ('$id_staf','$ktp','$kawin','$pangkat','$anak','$pasfoto','$susunankeluarga','$skp','$pidana')";
        //echo $q;
        mysqli_query($con,$q);
        header("location:training.php");
?>
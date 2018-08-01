 <?php
        include "connect.php";
        $id=$_POST['id'];
        $nama_staf = $_POST['nama_staf'];
        $nomor_KTP = $_POST['nomor_KTP'];
        $jabatan = $_POST['id_jabatan'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $kewarganegaraan = $_POST['kewarganegaraan'];
        $status_ = $_POST['status_'];
        $NPWP = $_POST['NPWP'];
        $jenis_kelamin_staf = $_POST['gender'];
        $alamat_sekarang = $_POST['alamat_sekarang'];
        $RT_sekarang = $_POST['RT_sekarang'];
        $RW_sekarang = $_POST['RW_sekarang'];
        $kelurahan_sekarang = $_POST['kelurahan_sekarang'];
        $kecamatan_sekarang = $_POST['kecamatan_sekarang'];
        $kabupatenkota_sekarang = $_POST['kabupatenkota_sekarang'];
        $alamat_KTP = $_POST['alamat_KTP'];
        $RT_KTP = $_POST['RT_KTP'];
        $RW_KTP = $_POST['RW_KTP'];
        $kelurahan_KTP = $_POST['kelurahan_KTP'];
        $kecamatan_KTP = $_POST['kecamatan_KTP'];
        $kabupatenkota_KTP = $_POST['kabupatenkota_KTP'];
        $telp1 = $_POST['telp1'];
        $telp2 = $_POST['telp2'];
        $email = $_POST['email'];
        $nama_ayah = $_POST['nama_ayah'];
        $nama_ibu = $_POST['nama_ibu'];
        $sd = $_POST['sd'];
        $smp = $_POST['smp'];
        $sma_smk = $_POST['sma_smk'];
        $akademi = $_POST['akademi'];
        $universitas = $_POST['universitas'];
        $pasca_sarjana = $_POST['pasca_sarjana'];
        $doktoral = $_POST['doktoral'];
        $tanggalmasuk_staf = $_POST['tanggalmasuk_staf'];

        $q="UPDATE staf SET NAMA_STAF='$nama_staf',NOMOR_KTP='$nomor_KTP',ID_JABATAN='$jabatan',TEMPAT_LAHIR='$tempat_lahir',TGL_LAHIR='$tgl_lahir',KEWARGANEGARAAN='$kewarganegaraan',STATUS_='$status_',NPWP='$NPWP',JENIS_KELAMIN_STAF='jenis_kelamin_staf',ALAMAT_SEKARANG='$alamat_sekarang',RT_SEKARANG='$RT_sekarang',RW_sekarang='$RW_sekarang',KELURAHAN_SEKARANG='$kelurahan_sekarang',KECAMATAN_SEKARANG='$kecamatan_sekarang',KABUPATENKOTA_SEKARANG='$kabupatenkota_sekarang',ALAMAT_KTP='$alamat_KTP',RT_KTP='$RT_KTP',RW_KTP='$RW_KTP',KELURAHAN_KTP='$kelurahan_KTP',KECAMATAN_KTP='$kecamatan_KTP',KABUPATENKOTA_KTP='$kabupatenkota_KTP',TELP1='$telp1',TELP2='$telp2',EMAIL='$email',NAMA_AYAH='$nama_ayah',NAMA_IBU='$nama_ibu',SD='$sd',SMP='$smp',SMA_SMK='$sma_smk',AKADEMI='$akademi',UNIVERSITAS='$universitas',PASCA_SARJANA='$pasca_sarjana',DOKTORAL='$doktoral',TANGGALMASUK_STAF='$tanggalmasuk_staf' WHERE ID_STAF='$id'";
        echo $q;
        mysqli_query($con,$q);

        if($staf['STATUS_']=='PENSIUN'){
                $p="UPDATE pensiun SET TGL_PENSIUN=curdate() WHERE ID_STAF='$id'";
        }

        header("location:liststaf.php");
?>
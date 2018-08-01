 <?php
        include "connect.php";
        $id=$_POST['id_staf'];
        
        $up=$_POST["GAJI_POKOK"];
        $ha=26;
        $uangmakan=14000*$ha;
        $tunjangankehadiran=$_POST["TUNJANGAN_KEHADIRAN"];
        $totallembur=$_POST["TOTAL_LEMBUR"];
        $tunjanganjabatan=$_POST["TUNJANGAN_JABATAN"];
        $tunjanganmasakerja=$_POST["TUNJANAN_MASA_KERJA"];
        $insentif=$_POST["INSENTIF"];
        $bonus=$_POST["BONUS"];
        $tunjanganfungsional=$_POST["TUNJANGAN_FUNGSIONAL"];
        $pajak=$_POST["PAJAK"];
        $gajitotal=($up+($ha*$um))+($tunjanganfungsional+$tunjanganmasakerja+$tunjanganjabatan)+($tunjangankehadiran+$insentif+$bonus)-$bpjs;
        $bpjs=0.05*$gajitotal;

        $q="INSERT INTO detail_gaji (ID_GAJI,TUNJANGAN_KEHADIRAN,TUNJANGAN_JABATAN,TUNJANAN_MASA_KERJA,TUNJANGAN_FUNGSIONAL,INSENTIF,BONUS,UANG_MAKAN) VALUES ('$id','$tgl_mulai_izin','$tgl_selesai_izin','$alasan_izin','$jumlah','Pending') ";
        echo $q;
        mysqli_query($con,$q);
        $p="INSERT INTO gaji (TOTAL_GAJI) VALUES ('$gajitotal')";
        mysqli_query($con,$p);
        //
            $id=$_SESSION["id"];
              $q2="SELECT ID_JABATAN FROM user_staf WHERE ID_USER='$id'";
             // echo $q;
              $res=mysqli_query($con,$q2);
              $level=mysqli_fetch_array($res);
              if ($level['ID_JABATAN']=="111"){
                header("location:gaji.php");
              }else{
                header("location:gaji.php");
              }
?>
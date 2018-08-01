 <?php
        include "connect.php";
        $id=$_POST['id_staf'];
        $tgl_mulai_cuti = $_POST['tgl_mulai_cuti'];
        $tgl_selesai_cuti = $_POST['tgl_selesai_cuti'];
        $alasan_cuti = $_POST['alasan_cuti'];
        $jumlah =$_POST['jumlah'];
        $periode=$_POST['periode'];

        $q="INSERT INTO pengajuan_cuti (ID_STAF,_TGL_MULAI_CUTI,TGL_SELESAI_CUTI,ALASAN_CUTI,JUMLAH,STATUS,ID_PERIODE) VALUES ('$id','$tgl_mulai_cuti','$tgl_selesai_cuti','$alasan_cuti','$jumlah','Pending','$periode') ";
        echo $q;
        mysqli_query($con,$q);
        //
            $id=$_SESSION["id"];
              $q2="SELECT ID_JABATAN FROM user_staf WHERE ID_USER='$id'";
             // echo $q;
              $res=mysqli_query($con,$q2);
              $level=mysqli_fetch_array($res);
              if ($level['ID_JABATAN']=="111"){
                header("location:cutiadmin.php");
              }else{
                header("location:cutistaf.php");
              }
?>
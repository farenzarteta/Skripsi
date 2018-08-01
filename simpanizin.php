 <?php
        include "connect.php";
        $id=$_POST['id_staf'];
        $tgl_mulai_izin = $_POST['tgl_mulai_izin'];
        $tgl_selesai_izin = $_POST['tgl_selesai_izin'];
        $alasan_izin = $_POST['alasan_izin'];
        $jumlah =$_POST['jumlah'];
        $q="INSERT INTO pengajuan_izin (ID_STAF,_TGL_MULAI_IZIN,TGL_SELESAI_IZIN,ALASAN_IZIN,JUMLAH,STATUS) VALUES ('$id','$tgl_mulai_izin','$tgl_selesai_izin','$alasan_izin','$jumlah','Pending') ";
        echo $q;
        mysqli_query($con,$q);
        //
            $id=$_SESSION["id"];
              $q2="SELECT ID_JABATAN FROM user_staf WHERE ID_USER='$id'";
             // echo $q;
              $res=mysqli_query($con,$q2);
              $level=mysqli_fetch_array($res);
              if ($level['ID_JABATAN']=="111"){
                header("location:izinadmin.php");
              }else{
                header("location:izinstaf.php");
              }
?>
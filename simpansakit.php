 <?php
        include "connect.php";
        $id=$_POST['id_staf'];
        $tgl_mulai_sakit = $_POST['tgl_mulai_sakit'];
        $tgl_selesai_sakit = $_POST['tgl_selesai_sakit'];
        $alasan_sakit = $_POST['alasan_sakit'];
        $jumlah =$_POST['jumlah'];
        $q="INSERT INTO pengajuan_sakit (ID_STAF,TGL_MULAI_SAKIT,TGL_SELESAI_SAKIT,ALASAN_SAKIT,JUMLAH,STATUS_) VALUES ('$id','$tgl_mulai_sakit','$tgl_selesai_sakit','$alasan_sakit','$jumlah','Pending') ";
        echo $q;
        mysqli_query($con,$q);
        //
        	  $id=$_SESSION["id"];
              $q2="SELECT ID_JABATAN FROM user_staf WHERE ID_USER='$id'";
             // echo $q;
              $res=mysqli_query($con,$q2);
              $level=mysqli_fetch_array($res);
              if ($level['ID_JABATAN']=="111"){
              	header("location:sakitadmin.php");
              }else{
              	header("location:sakitstaf.php");
              }
              

?>
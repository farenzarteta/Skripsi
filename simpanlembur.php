 <?php
        include "connect.php";
        $id=$_POST['id_staf'];
        $tgl_lembur = $_POST['tgl_lembur'];
        $jam_mulai_lembur = $_POST['jam_mulai_lembur'];
        $jam_selesai_lembur = $_POST['jam_selesai_lembur'];
        $durasi_lembur =$_POST['durasi_lembur'];
        $q="INSERT INTO pengajuan_lembur (ID_STAF,TGL_LEMBUR,JAM_MULAI_LEMBUR,JAM_SELESAI_LEMBUR,DURASI_LEMBUR,STATUS) VALUES ('$id','$tgl_lembur','$jam_mulai_lembur','$jam_selesai_lembur','$durasi_lembur','Pending') ";
        echo $q;
        mysqli_query($con,$q);
        //
        	  $id=$_SESSION["id"];
              $q2="SELECT ID_JABATAN FROM user_staf WHERE ID_USER='$id'";
             // echo $q;
              $res=mysqli_query($con,$q2);
              $level=mysqli_fetch_array($res);
              if ($level['ID_JABATAN']=="111"){
              	header("location:lemburadmin.php");
              }else{
              	header("location:lemburstaf.php");
              }
?>
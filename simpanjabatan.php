 <?php
        include "connect.php";
        $nama_jabatan = $_POST['nama_jabatan'];
        $q="INSERT INTO jabatan (NAMA_JABATAN) VALUES ('$nama_jabatan') ";
        
        mysqli_query($con,$q);
        header("location:jabatan.php");
?>
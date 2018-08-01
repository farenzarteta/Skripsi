 <?php
        include "connect.php";
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id_staf = $_POST['id_staf'];
        $id_jabatan = $_POST['id_jabatan'];
        $q="INSERT INTO user_staf (ID_STAF,ID_JABATAN,USERNAME,PASSWORD) VALUES ('$id_staf','$id_jabatan','$username','$password') ";
        echo $q;
        mysqli_query($con,$q);
        //header("location:hakakses.php");
?>
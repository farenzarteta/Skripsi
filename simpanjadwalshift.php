 <?php
        include "connect.php";
        $id_staf = $_POST['id_staf'];
        $id_shift = $_POST['id_shift'];

        $q="INSERT INTO jadwalshift (ID_STAF,ID_SHIFT,CREATED_AT) VALUES ('$id_staf','$id_shift',CURRENT_TIMESTAMP)";
        //echo $q;
        mysqli_query($con,$q);
        header("location:jadwalshift.php");
?>
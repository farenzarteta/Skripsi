 <?php
        include "connect.php";
        $id=$_POST['id'];
        $pertanyaan = $_POST['pertanyaan'];

        $q="UPDATE pertanyaan SET PERTANYAAN='$pertanyaan' WHERE ID_PERTANYAAN='$id'";
        //echo $q;
        mysqli_query($con,$q);
        header("location:pertanyaan.php");
?>
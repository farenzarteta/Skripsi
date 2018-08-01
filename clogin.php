 <?php
        include "connect.php";
        $user = @$_POST['user'];
        $pass = @$_POST['password'];
        $login = @$_POST['login'];

        if($login){
          if($user == "" || $pass == ""){
            ?><script type="text/javascript">alert("Username dan password harus diisi!")</script> <?php
          } else {
            
            $q="select * from user_staf where username = '$user' and password = '$pass'";
            
            $sql = mysqli_query($con,$q);
            $data = mysqli_fetch_array($sql);
            $cek = mysqli_num_rows($sql);
            if($cek >= 1){
              $_SESSION['id'] = $data['ID_USER'];
              $_SESSION['level'] = $data['ID_JABATAN'];
              header("location:index.php");
            } else {
              header("location:login.php?g=1");;
            }
          }
        }
?>
<?php
  include "connect.php"
?>
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Dapur Coklat</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<?php
  include"css.php"
?>
</head>

<body>  
<div class="page-container">  
   <div class="left-content">
     <div class="mother-grid-inner">
            <!--header start here-->
      <?php
        include "nav_header.php";
      ?>
      <!--heder end here-->
<!-- script-for sticky-nav -->
    <script>
    $(document).ready(function() {
       var navoffeset=$(".header-main").offset().top;
       $(window).scroll(function(){
        var scrollpos=$(window).scrollTop(); 
        if(scrollpos >=navoffeset){
          $(".header-main").addClass("fixed");
        }else{
          $(".header-main").removeClass("fixed");
        }
       });
       
    });
    </script>
    <!-- /script-for sticky-nav -->
<!--inner block start here-->
</div>

<div class="inner-block">
    <div class="blank">
      <div class="blankpage-main">
        <h2>Update User</h2>
        <?php
          $id=$_GET["id"];
          //echo $id;
          $q="SELECT u.ID_USER, s.ID_STAF, j.NAMA_JABATAN, u.USERNAME, u.PASSWORD FROM user_staf u INNER JOIN staf s ON  (s.id_staf=u.id_staf) INNER JOIN jabatan j ON (j.id_jabatan=s.id_jabatan) WHERE u.id_user='$id'";
          $res=mysqli_query($con,$q);
          $datatra=mysqli_fetch_array($res);
        ?>
        <form id="formData" method="POST" action="simpanupdateuser.php">
                <input type="text" readonly class="form-control" id="id" name="id" value="<?php echo $datatra["ID_USER"]; ?>"><br>
                <input type="text" readonly class="form-control" id="id_staf" name="id_staf" value="<?php echo $datatra["ID_STAF"]; ?>">
                  <label for="email">Username:</label>
                  <input type="text" class="form-control" id="username" name="username" value="<?php echo $datatra["USERNAME"]; ?>">
                  <label for="email">Password:</label>
                  <input type="password" class="form-control" id="password" name="password" value="<?php echo $datatra["PASSWORD"]; ?>">
                  <label for="email">Konfirmasi Password :</label>
                  <input type="password" value="<?php echo $datatra["PASSWORD"]; ?>" class="form-control" id="password2" name="password2">
                  <label for="email">Jabatan:</label>
                  <select class="form-control" name="id_jabatan"> 
                      <?php 
                        $q3="SELECT * FROM jabatan";
                        $res3=mysqli_query($con,$q3);

                        if(mysqli_num_rows($res3) > 0) {
                          while($row3=mysqli_fetch_array($res3)) {
                      ?>
                            <option value="<?= $row3['ID_JABATAN'] ?>" name="id_jabatan"><?= $row3['NAMA_JABATAN'] ?></option>
                      <?php
                          }    
                        }
                      ?>
                  </select> 
             
                <input type="submit" id="buttonSimpan" style="margin-top:20px" class="btn btn-default" value="Simpan">
        </form>
      </div>
    </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<!--<div class="copyrights"><p><a href="http://w3layouts.com/" target="_blank">FRN</a> </p></div>-->
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
    <?php
      include "nav_slider.php";
    ?>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
});
</script>
<?php
  include "js.php";
?>
</body>
</html>
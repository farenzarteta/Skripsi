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
        <h2>Update Sanksi</h2>
        <?php
          $id=$_GET["id"];
          //echo $id;
          $q="SELECT u.ID_USER, s.ID_STAF, j.TGL_SANKSI, j.KETERANGAN_SANKSI FROM user_staf u INNER JOIN staf s ON  (s.id_staf=u.id_staf) INNER JOIN sanksi j ON (j.id_staf=s.id_staf) WHERE u.id_user='$id'";
          $res=mysqli_query($con,$q);
          //  echo $q;
          $datatra=mysqli_fetch_array($res);
        ?>
        <form id="formData" method="POST" action="simpanupdatesanksi.php">
                <input type="text" readonly class="form-control" id="id" name="id" value="<?php echo $datatra["ID_SANKSI"]; ?>">
                <div class="form-group">
                  <label for="email">Nama :</label>
                  <select class="form-control" name="id_staf"> 
                      <?php 
                        $q="SELECT * FROM staf";
                        $res2=mysqli_query($con,$q);

                        if(mysqli_num_rows($res2) > 0) {
                          while($row=mysqli_fetch_array($res2)) {
                      ?>
                            <option value="<?= $datatra['ID_STAF'] ?>"><?= $datatra['NAMA_STAF'] ?></option>
                      <?php
                          }    
                        }
                      ?>
                  </select>  
                  </div>
                  <div>
                  <label for="email">Tanggal sanksi:</label>
                  <input type="date" class="form-control" id="tgl_sanksi" name="tgl_sanksi" value="<?php echo $datatra["TGL_SANKSI"]; ?>">
                </div>

                  <div>
                  <label for="email">Keterangan sanksi:</label>
                  <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo $datatra["KETERANGAN_SANKSI"]; ?>">
                </div>
                <input type="submit" id="buttonSimpan" class="btn btn-default" value="Simpan">
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
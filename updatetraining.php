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
        <h2>Update Training</h2>
        <?php
          $id=$_GET["id"];
          //echo $id;
          $q="SELECT u.ID_USER, s.ID_STAF, j.NAMA_JABATAN, u.USERNAME, u.PASSWORD FROM user_staf u INNER JOIN staf s ON  (s.id_staf=u.id_staf) INNER JOIN jabatan j ON (j.id_jabatan=s.id_jabatan) WHERE u.id_user='$id'";
          $res=mysqli_query($con,$q);
          $datatra=mysqli_fetch_array($res);
        ?>
        <form id="formData" method="POST" action="simpanupdateuser.php">
                <input type="text" readonly class="form-control" id="id" name="id" value="<?php echo $datatra["ID_TRAINING"]; ?>">
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
                  <label for="email">Pelatihan:</label>
                  <input type="text" class="form-control" id="nama_training" name="nama_training" value="<?php echo $datatra["NAMA_TRAINING"]; ?>">
                </div>

                  <div>
                  <label for="email">Lokasi:</label>
                  <input type="text" class="form-control" id="lokasi_training" name="lokasi_training" value="<?php echo $datatra["LOKASI_TRAINING"]; ?>">
                </div>
                  <div>
                  <label for="email">Tanggal mulai:</label>
                  <input type="date" class="form-control" id="tgl_brgkat_training" name="tgl_brgkat_training" value="<?php echo $datatra["TGL_BRGKAT_TRAINING"]; ?>">
                </div>
                  <div>
                  <label for="email">Tanggal selesai:</label>
                  <input type="date" class="form-control" id="tgl_plg_training" name="tgl_plg_training" value="<?php echo $datatra["TGL_PLG_TRAINING"]; ?>">
                </div>
                  <div>
                  <label for="email">Transportasi:</label>
                  <input type="text" class="form-control" id="transport_training" name="transport_training" value="<?php echo $datatra["TRANSPORT_TRAINING"]; ?>">
                </div>
                  <div>
                  <label for="email">Ongkos transportasi:</label>
                  <input type="text" class="form-control" id="nominal_transport" name="nominal_transport" value="<?php echo $datatra["NOMINAL_TRANSPORT"]; ?>">
                </div>
                  <div>
                  <label for="email">Akomodasi:</label>
                  <input type="text" class="form-control" id="akomodasi_training" name="akomodasi_training" value="<?php echo $datatra["AKOMODASI_TRAINING"]; ?>">
                </div>
                  <div>
                  <label for="email">Ongkos akomodasi:</label>
                  <input type="text" class="form-control" id="nominal_akomodasi" name="nominal_akomodasi" value="<?php echo $datatra["NOMINAL_AKOMODASI"]; ?>">
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
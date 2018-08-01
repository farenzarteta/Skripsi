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
        $id=$_SESSION["id"];
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
        <h2>Pengunduran diri</h2>
        <HR WIDTH=95% ALIGN="center" color="black">
        <p>saya dengan ini bermaksud untuk mengundurkan diri dari blablalbalbalbalbalbalbalbal.</p>

        <p>blablablablablablablabalbalbabl</p><br>
            <form id="formData" method="POST" action="simpanundurdiri.php">
                <div class="form-group">
                  <label for="email">Fotocopy KTP:</label>
                  <input type="file" class="form-control" id="ktp" name="ktp">
                </div>
                <div class="form-group">
                  <label for="email">Fotocopy akta perkawinan:</label>
                  <input type="file" class="form-control" id="kawin" name="kawin">
                </div>
                <div class="form-group">
                  <label for="email">Fotocopy kenaikan pangkat:</label>
                  <input type="file" class="form-control" id="pangkat" name="pangkat">
                </div>
                <div class="form-group">
                  <label for="email">Fotocopy akta anak:</label>
                  <input type="file" class="form-control" id="anak" name="anak">
                </div>
                <div class="form-group">
                  <label for="email">Pas photo:</label>
                  <input type="file" class="form-control" id="pasfoto" name="pasfoto">
                </div>
                <div class="form-group">
                  <label for="email">Daftar susunan keluarga:</label>
                  <input type="file" class="form-control" id="susunankeluarga" name="susunankeluarga">
                </div>
                <div class="form-group">
                  <label for="email">Fotocopy SKP:</label>
                  <input type="file" class="form-control" id="skp" name="skp">
                </div>
                <div class="form-group">
                  <label for="email">Fotocopy surat keterangan pidana:</label>
                  <input type="file" class="form-control" id="pidana" name="pidana">
                </div>
              </form>
        <a class="btn btn-danger btn_tmbahuser" href="tambahlembur.php">Simpan</a><br><br>
      </div>
    </div>
</div
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
  els
e  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
});

function deleteuser(id)
      {
        var txt;
        var r = confirm("Apakah anda yakin ingin menghapus user ini?");
        if (r == true) {
            window.location="deleteizin.php?id="+id;
        } else {
        }
      }
</script>
<?php
  include "js.php";
?>

  <script>
    $(document).ready(function()
      {
        $("#table").DataTable();
      });
  </script>
</body>
</html>
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
<script type="text/javascript">
  $(".btn_tmbahuser").on('click',function(){
    $.ajax({
      url: "tambahuser.php", 
      type: "POST",
      dataType: "html",
      success: function(result){
        $("#content").hide().html(result).fadeIn();
        $('html, body').animate({ scrollTop: 0 }, 'slow');
      }
    });
  });
</script>



</head>

<body>  
<div class="page-container">  
   <div class="left-content">
     <div class="mother-grid-inner">
            <!--header start here-->
      <?php
        include "nav_header.php";
                        $q="SELECT * FROM training";
                        $res=mysqli_query($con,$q);
                        $q2="SELECT * FROM staf";
                        $res2=mysqli_query($con,$q2);
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
        <h2>Input gaji</h2>
        <form id="formData" method="POST" action="simpangaji.php">
                <div class="form-group">
                  <label for="email">Tanggal:</label>
                  <input type="date" class="form-control" id="tanggal" name="tanggal">
                </div>
                <div class="form-group">
                  <label for="email">Nama staf:</label>
                  <select class="form-control" name="id_staf" id="id_staf"> 
                      <?php 
                        if(mysqli_num_rows($res2) > 0) {
                          while($row2=mysqli_fetch_array($res2)) {
                      ?>
                            <option value="<?= $row2['ID_STAF'] ?>" id="id_staf"><?= $row2['NAMA_STAF'] ?></option>
                      <?php
                          }    
                        }
                      ?>
                  </select>  
                </div>
                <div class="form-group">
                  <label for="email">Gaji pokok:</label>
                  <input type="text" class="form-control" id="gaji_pokok" name="gaji_pokok">
                </div>
                <div class="form-group">
                  <label for="email">Tunjangan kehadiran:</label>
                  <input type="text" class="form-control" id="tunjangan_kehadiran" name="tunjangan_kehadiran">
                </div>
                <div class="form-group">
                  <label for="email">Tunjangan jabatan :</label>
                  <input type="text" class="form-control" id="tunjangan_jabatan" name="tunjangan_jabatan">
                </div>
                <div class="form-group">
                  <label for="email">Tunjangan masa kerja :</label>
                  <input type="text" class="form-control" id="tunjangan_masa_kerja" name="tunjangan_masa_kerja">
                </div>
                <div class="form-group">
                  <label for="email">Tunjangan fungsional :</label>
                  <input type="text" class="form-control" id="tunjangan_fungsional" name="tunjangan_fungsional">
                </div>
                <div class="form-group">
                  <label for="email">Insentif:</label>
                  <input type="text" class="form-control" id="insentif" name="insentif">
                </div>
                <div class="form-group">
                  <label for="email">Bonus:</label>
                  <input type="text" class="form-control" id="bonus" name="bonus">
                </div>
                <div class="alert alert-danger" id="warning" style="display:none">
                    
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

function cekData()
        {
            $("#warning").hide();
            var error="";
            var nama=$("#nama").val();
            var username=$("#username").val();
            var password=$("#password").val();
            var password2=$("#password2").val();
            if (nama.trim()=="")
            {

              error="Nama harus diisi<br/>";
            }
            if (username.trim()=="")
            {
              error=error+"Username harus diisi<br/>"
            }
            if (password.trim()=="")
            {
              error=error+"Password tidak boleh kosong<br/>";
            }
            else if (password!=password2)
            {
              error=error+"Password dan konfirmasinya harus sama<br/>";
            }

            if (error!="")
            {
                $("#warning").show();
                $("#warning").html(error);
            }
            else {
              $("#formData").submit();
            }
            
        }
        $(document).ready(function()
          {
            $("#buttonSimpan").click(function()
            {
                cekData();
            }); 
          });
</script>
<?php
  include "js.php";
?>
</body>
</html>
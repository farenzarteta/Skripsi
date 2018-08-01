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
    		<h2>Tambah Staf</h2>
        <?php
          $q="SELECT * FROM jabatan";
          $res=mysqli_query($con,$q);

          $gender="";
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["gender"])) {
              $genderErr = "Gender is required";
            } else {
              $gender = test_input($_POST["gender"]);
            }
          }
        ?>
    		<form id="formData" method="POST" action="simpanstaf.php">
                <div class="form-group">
                  <label for="email">Nama staf:</label>
                  <input type="text" class="form-control" id="nama_staf" name="nama_staf">
                  <label for="email">Nomor KTP:</label>
                  <input type="text" class="form-control" id="nomor_KTP" name="nomor_KTP">
                  <div class="form-group">
                  <label for="email">Jabatan :</label>
                  <select class="form-control" name="id_jabatan"> 
                      <?php 
                        if(mysqli_num_rows($res) > 0) {
                          while($row=mysqli_fetch_array($res)) {
                      ?>
                            <option value="<?= $row['ID_JABATAN'] ?>"><?= $row['NAMA_JABATAN'] ?></option>
                      <?php
                          }    
                        }
                      ?>
                  </select>  
                </div>
                  <label for="email">Tempat lahir:</label>
                  <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                  <label for="email">Tanggal lahir:</label>
                  <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                  <label for="email">Kewarganegaraan:</label>
                  <input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan">
                  <label for="email">Status karyawan:</label>
                  <input type="text" class="form-control" id="status_" name="status_">
                  <label for="email">NPWP:</label>
                  <input type="text" class="form-control" id="NPWP" name="NPWP">
                  <label for="email">Jenis kelamin:<br></label>
                  <br><input type="radio" name="gender" id="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
                  <br><input type="radio" name="gender" id="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
                  <br><label for="email">Alamat sekarang:</label>
                  <input type="text" class="form-control" id="alamat_sekarang" name="alamat_sekarang">
                  <label for="email">RT:</label>
                  <input type="text" class="form-control" id="RT_sekarang" name="RT_sekarang">
                  <label for="email">RW:</label>
                  <input type="text" class="form-control" id="RW_sekarang" name="RW_sekarang">
                  <label for="email">Kelurahan:</label>
                  <input type="text" class="form-control" id="kelurahan_sekarang" name="kelurahan_sekarang">
                  <label for="email">Kecamatan:</label>
                  <input type="text" class="form-control" id="kecamatan_sekarang" name="kecamatan_sekarang">
                  <label for="email">Kabupaten/Kota:</label>
                  <input type="text" class="form-control" id="kabupatenkota_sekarang" name="kabupatenkota_sekarang">
                  <label for="email">Alamat KTP:</label>
                  <input type="text" class="form-control" id="alamat_KTP" name="alamat_KTP">
                  <label for="email">RT:</label>
                  <input type="text" class="form-control" id="RT_KTP" name="RT_KTP">
                  <label for="email">RW:</label>
                  <input type="text" class="form-control" id="RW_KTP" name="RW_KTP">
                  <label for="email">Kelurahan:</label>
                  <input type="text" class="form-control" id="kelurahan_KTP" name="kelurahan_KTP">
                  <label for="email">Kecamatan:</label>
                  <input type="text" class="form-control" id="kecamatan_KTP" name="kecamatan_KTP">
                  <label for="email">Kabupaten/Kota:</label>
                  <input type="text" class="form-control" id="kabupatenkota_KTP" name="kabupatenkota_KTP">
                  <label for="email">Nomor telp 1:</label>
                  <input type="text" class="form-control" id="telp1" name="telp1">
                  <label for="email">Nomor telp 2:</label>
                  <input type="text" class="form-control" id="telp2" name="telp2">
                  <label for="email">Email:</label>
                  <input type="text" class="form-control" id="email" name="email">
                  <label for="email">Nama ayah:</label>
                  <input type="text" class="form-control" id="nama_ayah" name="nama_ayah">
                  <label for="email">Nama ibu:</label>
                  <input type="text" class="form-control" id="nama_ibu" name="nama_ibu">
                  <label for="email">SD:</label>
                  <input type="text" class="form-control" id="sd" name="sd">
                  <label for="email">SMP:</label>
                  <input type="text" class="form-control" id="smp" name="smp">
                  <label for="email">SMA/SMK:</label>
                  <input type="text" class="form-control" id="sma_smk" name="sma_smk">
                  <label for="email">Akademi:</label>
                  <input type="text" class="form-control" id="akademi" name="akademi">
                  <label for="email">Universitas:</label>
                  <input type="text" class="form-control" id="universitas" name="universitas">
                  <label for="email">Pasca sarjana:</label>
                  <input type="text" class="form-control" id="pasca_sarjana" name="pasca_sarjana">
                  <label for="email">Doktoral:</label>
                  <input type="text" class="form-control" id="doktoral" name="doktoral">
                  <label for="email">Tanggal masuk:</label>
                  <input type="date" class="form-control" id="tanggalmasuk_staf" name="tanggalmasuk_staf">
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
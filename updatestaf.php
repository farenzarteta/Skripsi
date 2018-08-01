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
        <h2>Update Staf</h2>
        <?php
          $q="SELECT * FROM staf";
          $res=mysqli_query($con,$q);
          $dataStaf=mysqli_fetch_array($res);

          $gender="";
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["gender"])) {
              $genderErr = "Gender is required";
            } else {
              $gender = test_input($_POST["gender"]);
            }
          }
        ?>
        <form id="formData" method="POST" action="/simpanupdatestaf.php?id=<?php echo $row["ID_STAF"];?>">
                <div class="form-group">
                  <label for="email">Nama staf:</label>
                  <input type="text" class="form-control" id="nama_staf" name="nama_staf" value="<?php echo $dataStaf["NAMA_STAF"]; ?>">
                  <label for="email">Nomor KTP:</label>
                  <input type="text" class="form-control" id="nomor_KTP" name="nomor_KTP" value="<?php echo $dataStaf["NOMOR_KTP"]; ?>">
                  <div class="form-group">
                  <label for="email">Jabatan :</label>
                  <select class="form-control" name="id_jabatan"> 
                      <?php 
                        $q="SELECT * FROM jabatan";
                        $res2=mysqli_query($con,$q);

                        if(mysqli_num_rows($res2) > 0) {
                          while($row=mysqli_fetch_array($res2)) {
                      ?>
                            <option value="<?= $row['ID_JABATAN'] ?>"><?= $row['NAMA_JABATAN'] ?></option>
                      <?php
                          }    
                        }
                      ?>
                  </select>  
                </div>
                  <label for="email">Tempat lahir:</label>
                  <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo $dataStaf["TEMPAT_LAHIR"]; ?>">
                  <label for="email">Tanggal lahir:</label>
                  <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?php echo $dataStaf["TGL_LAHIR"]; ?>">
                  <label for="email">Kewarganegaraan:</label>
                  <input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan" value="<?php echo $dataStaf["KEWARGANEGARAAN"]; ?>">
                  <label for="email">Status karyawan:</label>
                  <input type="text" class="form-control" id="status_" name="status_" value="<?php echo $dataStaf["STATUS_"]; ?>">
                  <label for="email">NPWP:</label>
                  <input type="text" class="form-control" id="NPWP" name="NPWP" value="<?php echo $dataStaf["NPWP"]; ?>">
                  <label for="email">Jenis kelamin:<br></label>
                  <br><input type="radio" name="gender" id="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
                  <br><input type="radio" name="gender" id="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
                  <br><label for="email">Alamat sekarang:</label>
                  <input type="text" class="form-control" id="alamat_sekarang" name="alamat_sekarang" value="<?php echo $dataStaf["ALAMAT_SEKARANG"]; ?>">
                  <label for="email">RT:</label>
                  <input type="text" class="form-control" id="RT_sekarang" name="RT_sekarang" value="<?php echo $dataStaf["RT_SEKARANG"]; ?>">
                  <label for="email">RW:</label>
                  <input type="text" class="form-control" id="RW_sekarang" name="RW_sekarang" value="<?php echo $dataStaf["RW_SEKARANG"]; ?>">
                  <label for="email">Kelurahan:</label>
                  <input type="text" class="form-control" id="kelurahan_sekarang" name="kelurahan_sekarang" value="<?php echo $dataStaf["KELURAHAN_SEKARANG"]; ?>">
                  <label for="email">Kecamatan:</label>
                  <input type="text" class="form-control" id="kecamatan_sekarang" name="kecamatan_sekarang" value="<?php echo $dataStaf["KECAMATAN_SEKARANG"]; ?>">
                  <label for="email">Kabupaten/Kota:</label>
                  <input type="text" class="form-control" id="kabupatenkota_sekarang" name="kabupatenkota_sekarang" value="<?php echo $dataStaf["KABUPATEMKOTA_SEKARANG"]; ?>">
                  <label for="email">Alamat KTP:</label>
                  <input type="text" class="form-control" id="alamat_KTP" name="alamat_KTP" value="<?php echo $dataStaf["ALAMAT_KTP"]; ?>">
                  <label for="email">RT:</label>
                  <input type="text" class="form-control" id="RT_KTP" name="RT_KTP" value="<?php echo $dataStaf["RT_KTP"]; ?>">
                  <label for="email">RW:</label>
                  <input type="text" class="form-control" id="RW_KTP" name="RW_KTP" value="<?php echo $dataStaf["RW_KTP"]; ?>">
                  <label for="email">Kelurahan:</label>
                  <input type="text" class="form-control" id="kelurahan_KTP" name="kelurahan_KTP" value="<?php echo $dataStaf["KELURAHAN_KTP"]; ?>">
                  <label for="email">Kecamatan:</label>
                  <input type="text" class="form-control" id="kecamatan_KTP" name="kecamatan_KTP" value="<?php echo $dataStaf["KECAMATAN_KTP"]; ?>">
                  <label for="email">Kabupaten/Kota:</label>
                  <input type="text" class="form-control" id="kabupatenkota_KTP" name="kabupatenkota_KTP" value="<?php echo $dataStaf["KABUPATENKOTA_KTP"]; ?>">
                  <label for="email">Nomor telp 1:</label>
                  <input type="text" class="form-control" id="telp1" name="telp1" value="<?php echo $dataStaf["TELP1"]; ?>">
                  <label for="email">Nomor telp 2:</label>
                  <input type="text" class="form-control" id="telp2" name="telp2" value="<?php echo $dataStaf["TELP2"]; ?>">
                  <label for="email">Email:</label>
                  <input type="text" class="form-control" id="email" name="email" value="<?php echo $dataStaf["EMAIL"]; ?>">
                  <label for="email">Nama ayah:</label>
                  <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="<?php echo $dataStaf["NAMA_AYAH"]; ?>">
                  <label for="email">Nama ibu:</label>
                  <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="<?php echo $dataStaf["NAMA_IBU"]; ?>">
                  <label for="email">SD:</label>
                  <input type="text" class="form-control" id="sd" name="sd" value="<?php echo $dataStaf["SD"]; ?>">
                  <label for="email">SMP:</label>
                  <input type="text" class="form-control" id="smp" name="smp" value="<?php echo $dataStaf["SMP"]; ?>">
                  <label for="email">SMA/SMK:</label>
                  <input type="text" class="form-control" id="sma_smk" name="sma_smk" value="<?php echo $dataStaf["SMA_SMK"]; ?>">
                  <label for="email">Akademi:</label>
                  <input type="text" class="form-control" id="akademi" name="akademi" value="<?php echo $dataStaf["AKADEMI"]; ?>">
                  <label for="email">Universitas:</label>
                  <input type="text" class="form-control" id="universitas" name="universitas" value="<?php echo $dataStaf["UNIVERSITAS"]; ?>">
                  <label for="email">Pasca sarjana:</label>
                  <input type="text" class="form-control" id="pasca_sarjana" name="pasca_sarjana" value="<?php echo $dataStaf["PASCA_SARJANA"]; ?>">
                  <label for="email">Doktoral:</label>
                  <input type="text" class="form-control" id="doktoral" name="doktoral" value="<?php echo $dataStaf["DOKTORAL"]; ?>">
                  <label for="email">Tanggal masuk:</label>
                  <input type="date" class="form-control" id="tanggalmasuk_staf" name="tanggalmasuk_staf" value="<?php echo $dataStaf["TANGGALMASUK_STAF"]; ?>">
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
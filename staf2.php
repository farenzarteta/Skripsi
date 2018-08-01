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
<!--//skycons-icons-->
</head>

<body>  
<div class="page-container">  
   <div class="left-content">
     <div class="mother-grid-inner">
            <!--header start here-->
      <?php
        include "nav_header.php";
      ?>
      <div class="clearfix"> </div> 
    </div>
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
    <div class="user-marorm">
        <div class="malorum-top"> 
        </div>
        <div class="malorm-bottom">
          <?php
          $id=$_GET["id"];
                  $q="SELECT u.FOTO,u.USERNAME,j.NAMA_JABATAN,s.TEMPAT_LAHIR,s.NOMOR_KTP,s.TGL_LAHIR,s.KEWARGANEGARAAN,s.STATUS_,s.AGAMA,s.NPWP,s.JENIS_KELAMIN_STAF,s.NAMA_STAF, s.ALAMAT_SEKARANG, s.RT_SEKARANG, s.RW_SEKARANG,s.KELURAHAN_SEKARANG, s.KECAMATAN_SEKARANG, s.KABUPATENKOTA_SEKARANG, s.ALAMAT_KTP, s.RT_KTP, s.RW_KTP,s.KELURAHAN_KTP, s.KECAMATAN_KTP, s.KABUPATENKOTA_KTP, s.TELP1, s.TELP2, s.EMAIL, s.NAMA_AYAH, s.NAMA_IBU, s.SD, s.SMP, s.SMA_SMK, s.AKADEMI, s.UNIVERSITAS, s.PASCA_SARJANA, s.DOKTORAL, s.TANGGALMASUK_STAF
                     FROM user_staf u
                     INNER JOIN staf s ON  (s.id_staf=u.id_staf)
                     INNER JOIN jabatan j ON (j.id_jabatan=s.id_jabatan)
                     WHERE u.id_staf='$id'";
                    //echo $q;
                  $res=mysqli_query($con,$q);
                  $dataUser=mysqli_fetch_array($res);   
          ?>
          <span class="malorum-pro" style="background: url(images/<?php echo $dataUser["FOTO"];?>)no-repeat;background-size:100% 100%"> </span>
              <br><h1><?php echo $dataUser["NAMA_STAF"];?></h1>
              <div class="table-responsive">
              
                <table>
                      <tbody>
                        <tr>
                          <th scope="row">Jabatan</th>
                          <td>:<?php echo $dataUser["NAMA_JABATAN"]; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">No. KTP</th>
                          <td>:<?php echo $dataUser["NOMOR_KTP"]; ?></td>
                      </tbody>
                </table>
                <HR WIDTH=95%>
                <table>
                      </tr>
                        <tr>
                          <th style="width:400px" scope="row">Tempat lahir</th>
                          <td>:<?php echo $dataUser["TEMPAT_LAHIR"];?></td>
                        </tr>
                        <tr>
                          <th scope="row">Tanggal lahir:</th>
                          <td><?php echo $dataUser["TGL_LAHIR"]; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">Kewarganegaraan:</th>
                          <td><?php echo $dataUser["KEWARGANEGARAAN"]; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">Status karyawan:</th>
                          <td><?php echo $dataUser["STATUS_"]; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">NPWP:</th>
                          <td><?php echo $dataUser["NPWP"]; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">Jenis kelamin:</th>
                          <td><?php echo $dataUser["JENIS_KELAMIN_STAF"]; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">Agama:</th>
                          <td><?php echo $dataUser["AGAMA"]; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">Alamat sekarang:</th>
                          <td><?php echo $dataUser["ALAMAT_SEKARANG"]; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">RT:</th>
                          <td><?php echo $dataUser["RT_SEKARANG"]; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">RW:</th>
                          <td><?php echo $dataUser["RW_SEKARANG"]; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">Kelurahan:</th>
                          <td><?php echo $dataUser["KELURAHAN_SEKARANG"]; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">Kecamatan:</th>
                          <td><?php echo $dataUser["KECAMATAN_SEKARANG"]; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">Kabupaten/Kota:</th>
                          <td><?php echo $dataUser["KABUPATENKOTA_SEKARANG"]; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">Alamat KTP:</th>
                          <td><?php echo $dataUser["ALAMAT_KTP"]; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">RT:</th>
                          <td><?php echo $dataUser["RT_KTP"]; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">RW:</th>
                          <td><?php echo $dataUser["RW_KTP"]; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">Kelurahan:</th>
                          <td><?php echo $dataUser["KELURAHAN_KTP"]; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">Kecamatan:</th>
                          <td><?php echo $dataUser["KECAMATAN_KTP"]; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">Kabupaten/Kota:</th>
                          <td><?php echo $dataUser["KABUPATENKOTA_KTP"]; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">No. Telepon 1:</th>
                          <td><?php echo $dataUser["TELP1"]; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">No. Telepon 2:</th>
                          <td><?php echo $dataUser["TELP2"]; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">Email:</th>
                          <td><?php echo $dataUser["EMAIL"]; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">Nama ayah:</th>
                          <td><?php echo $dataUser["NAMA_AYAH"]; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">Nama ibu:</th>
                          <td><?php echo $dataUser["NAMA_IBU"]; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">SD:</th>
                          <td><?php echo $dataUser["SD"]; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">SMP:</th>
                          <td><?php echo $dataUser["SMP"]; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">SMA/SMK:</th>
                          <td><?php echo $dataUser["SMA_SMK"]; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">Akademi:</th>
                          <td><?php echo $dataUser["AKADEMI"]; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">Universitas:</th>
                          <td><?php echo $dataUser["UNIVERSITAS"]; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">Pasca sarjana:</th>
                          <td><?php echo $dataUser["PASCA_SARJANA"]; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">Doktoral:</th>
                          <td><?php echo $dataUser["DOKTORAL"]; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">Tanggal masuk:</th>
                          <td><?php echo $dataUser["TANGGALMASUK_STAF"]; ?></td>
                        </tr>
                      </tbody>
                </table>
                <HR WIDTH=95%>
                Keluarga<br>
                <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Status Hubungan</th>                                    
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">NIK</th>
                                  </tr>
                                </thead>
                                <tbody>
                                   <?php
                                      $no=1;
                                      $id2=$_SESSION["id"];
                                      $q2="SELECT k.NAMA, k.STATUS_HUBUNGAN, k.TGL_LAHIR, k.NIK ".
                                         "FROM user_staf u2 ".
                                         "INNER JOIN staf s2 ON  (s2.id_staf=u2.id_staf) ".
                                         "INNER JOIN keluarga k ON (k.id_staf=s2.id_staf) ".
                                         "WHERE u2.id_user='$id2'";
                                       //echo $q2;
                                      $res2=mysqli_query($con,$q2);
                                      while ($dataUser2=mysqli_fetch_array($res2))
                                      {
                                        ?>
                                          <tr>
                                              <td>
                                                <?php
                                                    echo $no;
                                                    $no++;
                                                ?>
                                              </td>
                                              <td>
                                                <?php
                                                  echo $dataUser2["NAMA"];
                                                ?>
                                              </td>
                                              <td>
                                                <?php
                                                  echo $dataUser2["STATUS_HUBUNGAN"];
                                                ?>
                                              </td>
                                              <td>
                                                <?php
                                                  echo $dataUser2["TGL_LAHIR"];
                                                ?>
                                              </td>
                                              <td>
                                                <?php
                                                  echo $dataUser2["NIK"];
                                                ?>
                                              </td>
                                          </tr>
                                        <?php
                                      }
                                   ?>
                                </tbody>
                  </table>
                  <HR WIDTH=95%>
                  Keterampilan<br>
                  <?php ?>
                  <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama Keterampilan:</th>
                                    <th scope="col">Tanggal</th>
                                  </tr>
                                </thead>
                                <tbody>
                                   <?php
                                      $no2=1;
                                      $id3=$_SESSION["id"];
                                      $q3="SELECT kt.NAMA_KETERAMPILAN, kt.TGL_KETERAMPILAN ".
                                         "FROM user_staf u3 ".
                                         "INNER JOIN staf s3 ON  (s3.id_staf=u3.id_staf) ".
                                         "INNER JOIN keterampilan kt ON (kt.id_staf=s3.id_staf)  ".
                                         "WHERE u3.id_user='$id3'";
                                       //  echo $q;
                                      $res3=mysqli_query($con,$q3);
                                      while ($dataUser3=mysqli_fetch_assoc($res3))
                                      {
                                        ?>
                                          <tr>
                                              <td>
                                                <?php
                                                    echo $no2;
                                                    $no++;
                                                ?>
                                              </td>
                                              <td>
                                                <?php
                                                  echo $dataUser3["NAMA_KETERAMPILAN"];
                                                ?>
                                              </td>
                                              <td>
                                                <?php
                                                  echo $dataUser3["TGL_KETERAMPILAN"];
                                                ?>
                                              </td>
                                          </tr>
                                        <?php
                                      }
                                   ?>
                                </tbody>
                    </table>
                    <HR WIDTH=95%>
                    Kursus<br>
                   <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama Kursus:</th>
                                    <th scope="col">Instansi</th>
                                    <th scope="col">Tanggal masuk</th>
                                    <th scope="col">Tanggal keluar</th>
                                  </tr>
                                </thead>
                                <tbody>
                                   <?php
                                      $no3=1;
                                      $id4=$_SESSION["id"];
                                      $q4="SELECT ku.NAMA_KURSUS, ku.INSTANSI, ku.MASUK, ku.KELUAR ".
                                         "FROM user_staf u4 ".
                                         "INNER JOIN staf s4 ON  (s4.id_staf=u4.id_staf) ".
                                         "INNER JOIN kursus ku ON (ku.id_staf=s4.id_staf)  ".
                                         "WHERE u4.id_user='$id4'";
                                       //  echo $q;
                                      $res4=mysqli_query($con,$q4);
                                      while ($dataUser4=mysqli_fetch_assoc($res4))
                                      {
                                        ?>
                                          <tr>
                                              <td>
                                                <?php
                                                    echo $no;
                                                    $no++;
                                                ?>
                                              </td>
                                              <td>
                                                <?php
                                                  echo $dataUser4["NAMA_KURSUS"];
                                                ?>
                                              </td>
                                              <td>
                                                <?php
                                                  echo $dataUser4["INSTANSI"];
                                                ?>
                                              </td>
                                              <td>
                                                <?php
                                                  echo $dataUser4["MASUK"];
                                                ?>
                                              </td>
                                              <td>
                                                <?php
                                                  echo $dataUser4["KELUAR"];
                                                ?>
                                              </td>
                                          </tr>
                                        <?php
                                      }
                                   ?>
                                </tbody>
                    </table>
                    <HR WIDTH=95%>
                    Bahasa<br>
                    <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama Bahasa:</th>
                                    <th scope="col">Tanggal</th>
                                  </tr>
                                </thead>
                                <tbody>
                                   <?php
                                      $no4=1;
                                      $id5=$_SESSION["id"];
                                      $q5="SELECT b.NAMA_BAHASA, b.TGL_BAHASA ".
                                         "FROM user_staf u5 ".
                                         "INNER JOIN staf s5 ON  (s5.id_staf=u5.id_staf) ".
                                         "INNER JOIN bahasa b ON (b.id_staf=s5.id_staf)  ".
                                         "WHERE u5.id_user='$id5'";
                                       //  echo $q;
                                      $res5=mysqli_query($con,$q5);
                                      while ($dataUser5=mysqli_fetch_assoc($res5))
                                      {
                                        ?>
                                          <tr>
                                              <td>
                                                <?php
                                                    echo $no;
                                                    $no++;
                                                ?>
                                              </td>
                                              <td>
                                                <?php
                                                  echo $dataUser5["NAMA_BAHASA"];
                                                ?>
                                              </td>
                                              <td>
                                                <?php
                                                  echo $dataUser5["TGL_BAHASA"];
                                                ?>
                                              </td>
                                          </tr>
                                        <?php
                                      }
                                   ?>
                                </tbody>
                      </table>
                      <HR WIDTH=95%>
                      Pengalaman Kerja<br>
                      <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Posisi:</th>
                                    <th scope="col">Nama Perusahaan</th>
                                    <th scope="col">Tanggal Masuk</th>
                                    <th scope="col">Tanggal Keluar</th>
                                  </tr>
                                </thead>
                                <tbody>
                                   <?php
                                      $no5=1;
                                      $id6=$_SESSION["id"];
                                      $q6="SELECT pk.POSISI, pk.NAMA_PERUSAHAAN, pk.MASUK, pk.KELUAR ".
                                         "FROM user_staf u6 ".
                                         "INNER JOIN staf s6 ON  (s6.id_staf=u6.id_staf) ".
                                         "INNER JOIN pengalaman_kerja pk ON (pk.id_staf=s6.id_staf)  ".
                                         "WHERE u6.id_user='$id2'";
                                       //  echo $q;
                                      $res6=mysqli_query($con,$q6);
                                      while ($dataUser6=mysqli_fetch_assoc($res6))
                                      {
                                        ?>
                                          <tr>
                                              <td>
                                                <?php
                                                    echo $no;
                                                    $no++;
                                                ?>
                                              </td>
                                              <td>
                                                <?php
                                                  echo $dataUser6["POSISI"];
                                                ?>
                                              </td>
                                              <td>
                                                <?php
                                                  echo $dataUser6["NAMA_PERUSAHAAN"];
                                                ?>
                                              </td>
                                              <td>
                                                <?php
                                                  echo $dataUser6["MASUK"];
                                                ?>
                                              </td>
                                              <td>
                                                <?php
                                                  echo $dataUser6["KELUAR"];
                                                ?>
                                              </td>
                                          </tr>
                                        <?php
                                      }
                                   ?>
                                </tbody>
                      </table>
                    </div> <!--table responsive-->
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
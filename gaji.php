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
        <h2>Gaji</h2>
        <a class="btn btn-warning btn_tmbahuser" href="pilihpegawaigaji.php">Ubah Komponen Karyawan</a><br><br>
        <div class="table-responsive">
                <table class="table table-hover" id="table">
                      <thead>
                        <tr>
                          <th scope="col">No.</th>
                          <th scope="col">Id staf</th>
                          <th scope="col">Nama staf</th>
                          <th scope="col">Tanggal gaji</th>
                          <th scope="col">Total gaji</th>
                          <th scope="col">Periode</th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php
                            $no=1;
                            $q="SELECT dg.*,s.NAMA_STAF,DATE_FORMAT(TGL_GAJI,'%Y-%m') as per FROM gaji dg INNER JOIN staf s ON (s.ID_STAF=dg.ID_STAF) ";
                            $res=mysqli_query($con,$q);
                            while ($row=mysqli_fetch_assoc($res))
                            {

                              //$q="SELECT "; -----> ambil data hari kerja
                              $up=$row["GAJI_POKOK"];
                              
                              
                              $ha=26;
                              $q="SELECT COUNT(ID_STAF) AS TotalMasuk
                                  FROM absen
                                  WHERE ID_STAF='". $row["ID_STAF"] ."' 
                                  AND DATE_FORMAT(Tanggal,'%Y-%m')='". $row["per"] ."'";
                            
                              $res2=mysqli_query($con,$q);
                              if ($row2=mysqli_fetch_assoc($res2))
                              {

                                $ha=$row2["TotalMasuk"];  
                              }
                              
                              

                              $uangmakan=14000*$ha;
                              $tunjangankehadiran=$ha*$row["TUNJANGAN_KEHADIRAN"];
                              $totallembur=$row["TOTAL_LEMBUR"];
                              $tunjanganjabatan=$row["TUNJANGAN_JABATAN"];
                              $tunjanganmasakerja=$row["TUNJANAN_MASA_KERJA"];
                              $insentif=$row["INSENTIF"];
                              $bonus=$row["BONUS"];
                              $tunjanganfungsional=$row["TUNJANGAN_FUNGSIONAL"];
                              $pajak=$row["PAJAK"];
                              $bpjs=0.05*$up;
                              $gajitotal=($up+$uangmakan)+($tunjanganfungsional+$tunjanganmasakerja+$tunjanganjabatan)+($tunjangankehadiran+$insentif+$bonus)-$bpjs;
                              
                              $periode="";
                              $tglGaji=$row["TGL_GAJI"];
                              $q="SELECT * FROM periode WHERE '$tglGaji'>=TGL_START_PER AND '$tglGaji'<=TGL_FINISH_PER";
                              $res2=mysqli_query($con,$q);
                              if ($row2=mysqli_fetch_assoc($res2))
                              {
                                $periode=$row2["NAMA_PER"];
                              }
                              ?>
                                <tr>
                                    <td>
                                      <?php
                                        echo $no++;
                                      ?>
                                    </td>
                                    <td>
                                      <?php
                                        echo $row["ID_STAF"];
                                      ?>
                                    </td>
                                    <td>
                                      <?php
                                        echo $row["NAMA_STAF"];
                                      ?>
                                    </td>
                                    <td>
                                      <?php
                                        echo $row["TGL_GAJI"];
                                      ?>
                                    </td>
                                    <td style="text-align:right">
                                      <?php
                                        echo number_format($gajitotal);
                                      ?>
                                    </td>
                                    <td>
                                      <?php
                                        echo $periode;
                                      ?>
                                    </td>
                                </tr>
                              <?php
                            }
                         ?>
                      </tbody>        
                </table>
            </div>
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

function deleteuser(id)
      {
        var txt;
        var r = confirm("Apakah anda yakin ingin menghapus user ini?");
        if (r == true) {
            window.location="deletejabatan.php?id="+id;
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
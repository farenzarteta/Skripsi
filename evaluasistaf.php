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
    		<form method="POST" action="simpanjawaban.php">
             <input type="hidden" name="idstaff" value="<?php echo $_GET["id_staf"];?>"/>
             <input type="hidden" name="periode" value="<?php echo $_GET["periode"];?>"/>
            <?php
              $q="SELECT * FROM staf WHERE ID_STAF='". $_GET["id_staf"] ."'";
              $res=mysqli_query($con,$q);
              $dataStaf=mysqli_fetch_assoc($res);

              $q="SELECT * FROM periode_evaluasi WHERE ID_PERIODE='". $_GET["periode"] ."'";
              $res=mysqli_query($con,$q);
              $dataPeriode=mysqli_fetch_assoc($res);

              echo "<h3 style='margin-bottom:20px'>Evaluasi ". $dataStaf["NAMA_STAF"] ." untuk periode ". $dataPeriode["NAMA"] ."</h3>";
            ?>
            
            
            
            <div class="table-responsive">
                    <table class="table table-hover" id="table">
                          <thead>
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">PERTANYAAN</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                             <?php
                              $no=1;
                              $q="SELECT p.PERTANYAAN,p.ID_PERTANYAAN ".
                                 "FROM pertanyaan_periode pp ".
                                 "INNER JOIN pertanyaan p ON (p.ID_PERTANYAAN=pp.ID_PERTANYAAN) ".
                                 "WHERE pp.ID_PERIODE='". $_GET["periode"]."'";

                                 echo $q;
                              $res=mysqli_query($con,$q);
                              while ($row=mysqli_fetch_assoc($res))
                              {
                                ?>
                                  <input type="hidden" name="id[]" value="<?php echo $row["ID_PERTANYAAN"];?>">
                                  <tr>
                                      
                                      <td>
                                        <?php
                                          echo $no++;
                                        ?>
                                      </td>
                                      <td>
                                        <?php
                                          echo $row["PERTANYAAN"];
                                        ?>
                                      </td>
                                      <td>
                                        <select name="penilaian[]">
                                            <option value="Sangat Buruk">Sangat tidak setuju</option>
                                            <option value="Buruk">Tidak setuju</option>
                                            <option value="Cukup" selected="selected">Ragu-ragu</option>
                                            <option value="Baik">Setuju</option>
                                            <option value="Sangat Baik">Sangat setuju</option>
                                        </select>
                                      </td>
                                  </tr>
                                <?php
                              }
                             ?>
                          </tbody>        
                    </table>
                </div>
                <input type="hidden" name="id" value="<?php echo $_GET["id"];?>">
                <textarea class="form-control" name="saran" placeholder="Masukkan komentar tertulis anda"></textarea><br>
                <button type="submit" class="btn btn-default">Simpan</button>
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
        //$("#table").DataTable();
      });
  </script>
</body>
</html>
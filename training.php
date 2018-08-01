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
    		<h2>Training</h2>
    		<a class="btn btn-warning btn_tmbahuser" href="tambahtraining.php">Insert new training staff</a><br><br>
    		<div class="table-responsive">
                <table class="table table-hover">
                      <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Id staf</th>
                  <th scope="col">Nama staf</th>
                  <th scope="col">Pelatihan</th>
                  <th scope="col">Lokasi</th>
                  <th scope="col">Tanggal mulai</th>
                  <th scope="col">Tanggal selesai</th>
                  <th scope="col">Transportasi</th>
                  <th scope="col">Ongkos Transportasi</th>
                  <th scope="col">Akomodasi</th>
                  <th scope="col">Ongkos Akomodasi</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
                 <?php
                    $no=1;
                    $q="SELECT * FROM training t INNER JOIN staf s ON (s.ID_STAF=t.ID_STAF)";
                    $res=mysqli_query($con,$q);
                    while ($row=mysqli_fetch_assoc($res))
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
                              	echo $row["NAMA_TRAINING"];
                              ?>
                            </td>
                            <td>
                              <?php
                              	echo $row["LOKASI_TRAINING"];
                              ?>
                            </td>
                            <td>
                              <?php
                              	echo $row["TGL_BRGKAT_TRAINING"];
                              ?>
                            </td>
                            <td>
                              <?php
                              	echo $row["TGL_PLG_TRAINING"];
                              ?>
                            </td>
                            <td>
                              <?php
                              	echo $row["TRANSPORT_TRAINING"];
                              ?>
                            </td>
                            <td>
                              <?php
                              	echo $row["NOMINAL_TRANSPORT"];
                              ?>
                            </td>
                            <td>
                              <?php
                              	echo $row["AKOMODASI_TRAINING"];
                              ?>
                            </td>
                            <td>
                              <?php
                              	echo $row["NOMINAL_AKOMODASI"];
                              ?>
                            </td>
                            <td>
                              <a href="updatetraining.php?id=<?php echo $row["ID_TRAINING"];?>">Update</a>
                            </td>
                            <td>
                              <a onclick="deletetraining(<?php echo $row["ID_TRAINING"];?>)" href="#">Delete</a>
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

function deletetraining(id)
      {
        var txt;
        var r = confirm("Apakah anda yakin ingin menghapus training ini?");
        if (r == true) {
            window.location="deletetraining.php?id="+id;
        } else {
        }
      }
</script>
<?php
	include "js.php";
?>
</body>
</html>
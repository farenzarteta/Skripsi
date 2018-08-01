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
    		<h2>List pertanyaan</h2>
    		<a class="btn btn-warning btn_tmbahjabatan" href="tambahpertanyaan.php">Tambah pertanyaan</a><br><br>
    		<div class="table-responsive">
                <table class="table table-hover" id="table">
                      <thead>
                        <tr>
                          <th scope="col">Id pertanyaan</th>
                          <th scope="col">Pertanyaan</th>
                          <th scope="col">Update</th>
                          <th scope="col">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php
                            $no=1;
                            $q="SELECT * FROM pertanyaan";
                            $res=mysqli_query($con,$q);
                            while ($row=mysqli_fetch_assoc($res))
                            {
                              ?>
                                <tr>
                                    <td>
                                      <?php
                                        echo $row["ID_PERTANYAAN"];
                                      ?>
                                    </td>
                                    <td>
                                      <?php
                                        echo $row["PERTANYAAN"];
                                      ?>
                                    </td>
                                    <td>
                                      <a href="updatepertanyaan.php?id=<?php echo $row["ID_PERTANYAAN"];?>">Update</a>
                                    </td>
                                    <td>
                                      <a onclick="deleteTable('<?= $row["ID_PERTANYAAN"] ?>','ID_PERTANYAAN','pertanyaan')" href="#">Delete</a>
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
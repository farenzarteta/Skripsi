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
    		<form method="POST" action="simpanpertanyaan.php">
            <?php
              $q="SELECT * FROM periode_evaluasi WHERE ID_PERIODE='". $_GET["id"] ."'";
              
              $res=mysqli_query($con,$q);
              $dataPeriode=mysqli_fetch_assoc($res);

              echo "<h3 style='margin-bottom:20px'>Pertanyaan untuk periode ".$dataPeriode["NAMA"]."</h3>";
            ?>
            <input type="hidden" name="id" value="<?php echo $_GET["id"];?>">
            <div class="table-responsive">
                    <table class="table table-hover" id="table">
                          <thead>
                            <tr>
                              <th></th>
                              <th scope="col">ID</th>
                              <th scope="col">Pertanyaan</th>
                            </tr>
                          </thead>
                          <tbody>
                             <?php
                              $q="SELECT * FROM pertanyaan";
                              $res=mysqli_query($con,$q);
                              while ($row=mysqli_fetch_assoc($res))
                              {
                                $checked="";
                                $q="SELECT * FROM pertanyaan_periode WHERE ID_PERIODE='". $_GET["id"] ."' AND ID_PERTANYAAN='". $row["ID_PERTANYAAN"] ."'";
                                $res2=mysqli_query($con,$q);
                                if ($row2=mysqli_fetch_assoc($res2))
                                {
                                  $checked="checked";
                                }
                                ?>
                                  <tr>
                                      <td>
                                          <input <?php echo $checked;?> type="checkbox" name="pertanyaan[]" value="<?php echo $row["ID_PERTANYAAN"];?>"/>
                                      </td>
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
                                  </tr>
                                <?php
                              }
                             ?>
                          </tbody>        
                    </table>
                </div>
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
        $("#table").DataTable();
      });
  </script>
</body>
</html>
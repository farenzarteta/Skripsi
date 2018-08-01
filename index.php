<?php
	include "connect.php";
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
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js/skycons.js"></script>
<link href='//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
<!--static chart-->
<script src="js/Chart.min.js"></script>
<!--//charts-->
<!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
    <script src="js/chartinator.js" ></script>
<!--geo chart-->

<!--skycons-icons-->
<script src="js/skycons.js"></script>
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
      	<img src="/web/images/bg-2.jpg" class="img-responsive">
        <br><center><p style="font-size:14px;">In the confectionary world DAPUR COKELAT continues to set the pace and innovation in this booming and constantly innovative industry. Sophisticated pastry lovers have learned to recognize and expect outstanding quality. As the pastry-lover's palette searches for an ever more sensuous pastry experience, DAPUR COKELAT will continue to satisfy the most discerning pastry connoisseurs. The Company's founders share a mutual passion for exceptional cakes and pastries.</p><br> <br>
        <img src="/web/images/bg-3.jpg" style="float:left; margin:0 8px 4px 0;" width="250" height="290"></center><br>
        <br><br><p style="font-size:14px">DAPUR COKELAT's humble beginnings began with a vision and passion to create exceptional cakes and pastries. The business began as a part-time home-based-enterprise. Over the ensuing years the co-owners successfully transformed their home-based business into a company that today has more than twenty retail sales outlets in several major cities in Indonesia. The corporate offices are located in Serpong, Tangerang.</p>
        <br><p style="font-size:14px">DAPUR COKELAT's philosophy is founded on the belief that an innovative product line of superior chocolates and cakes can be successfully marketed to an increasingly discriminating clientele ,while still affordable for all to enjoy.</p>
        <br><img src="/web/images/bg-4.jpg" style="float:right; margin:0 8px 4px 0;" width="300" height="300">
        <br><br><br><p style="font-size:14px">These superior quality chocolates and cakes keep DAPUR COKELAT on the leading edge of the fine pastry market. in Indonesia. We will continue to set the standard for the finest pastries anywhere!</p>
        <br><p style="font-size:14px">As DAPUR COKELAT grow, our dreams remain the same. The concept for our store designs remains unchanged as well. We want you, our faithful to customers to feel as comfortable in our stores as you are at home.</p>
        <br><p style="font-size:14px">We look forward to welcoming you in your friendly neighborhood DAPUR COKELAT stores!</p><br><br>
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
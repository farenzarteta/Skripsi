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
        $id=$_SESSION["id"];
        $no=1;
        $q="SELECT u.ID_USER, s.ID_STAF, u.USERNAME, u.PASSWORD, u.FOTO ".
        "FROM user_staf u ".
        "INNER JOIN staf s ON  (s.id_staf=u.id_staf) ".
        "WHERE u.id_user='$id'";
        $res=mysqli_query($con,$q);
        $dataUser=mysqli_fetch_array($res);
        //  echo $q;
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
        <h2>Import data</h2>
        <form id="formData" enctype="multipart/form-data" method="POST" action="olahexcel.php">
                <div class="form-group">
                  <input type="hidden" name="id" value="1">
                </div>
                <div class="form-group">
                  <label for="email">File:</label>
                  <input type="file" class="form-control" name="file"/>
                </div>             
                <div class="alert alert-danger" id="warning" style="display:none">
                </div>
                <input type="submit" id="buttonSimpan" class="btn btn-default" value="Simpan">
        </form>
        <br>
        <br>
        <div class="table-responsive">
                <table class="table table-hover" id="table">
                      <thead>
                <tr>
                  <tr>
                      <th scope="col">Nama staf</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Jam masuk</th>
                      <th scope="col">Jam keluar</th>
                  </tr>
                </tr>
              </thead>
              <tbody>
                 <?php
                    $id=$_SESSION["id"];
                    $q="SELECT a.*,s.NAMA_STAF FROM absen a INNER JOIN staf s ON  (s.id_staf=a.id_staf) ";
                    //echo $q;
                    $res=mysqli_query($con,$q);
                    while ($row=mysqli_fetch_assoc($res))
                    {
                      ?>
                        <tr>
                            <td>
                              <?php
                                echo $row["NAMA_STAF"];
                              ?>
                            </td>
                            <td>
                              <?php
                                echo $row["Tanggal"];
                              ?>
                            </td>
                            <td>
                              <?php
                                echo $row["JamMasuk"];
                              ?>
                            </td>
                            <td>
                              <?php
                                echo $row["JamKeluar"];
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
    <script>
    $(document).ready(function()
      {
        $("#table").DataTable();
      });
  </script>
</body>
</html>
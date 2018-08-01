<?php
	include "connect.php";
    $id=$_SESSION['id'];
    $q="SELECT u.FOTO, u.USERNAME, j.NAMA_JABATAN ".
    	"FROM user_staf u ".
   		"INNER JOIN staf s ON  (s.id_staf=u.id_staf) ".
    	"INNER JOIN jabatan j ON (j.id_jabatan=s.id_jabatan) ".
    	"WHERE u.id_user='$id'";
    $query=mysqli_query($con,$q);
    $row=mysqli_fetch_array($query);
    //echo $q;
?>

				<div class="header-main">
					<div class="header-left">
						<div class="logo-name">
							<img href="index.html" id="logo" src="images/dc_logo.jpg" alt="Logo"/>											
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="header-right">
						<div class="profile_details_left"><!--notifications of menu start -->
							<div class="clearfix"> </div>
						</div>
							<!--notification menu end -->
						<div class="profile_details">		
							<ul>
								<li class="dropdown profile_details_drop">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
										<div class="profile_img">	
											<span class="prfil-img"><img src="images/p1.png" alt=""> </span>
											<div class="user-name">
												<p><?php echo $row["USERNAME"];?></p>
												<span><?php echo $row["NAMA_JABATAN"];?></span>
											</div>
											<i class="fa fa-angle-down lnr"></i>
											<i class="fa fa-angle-up lnr"></i>
											<div class="clearfix"></div>	
										</div>	
									</a>
									<ul class="dropdown-menu drp-mnu">
										<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="clearfix"> </div>				
					</div>
				     
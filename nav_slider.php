<?php
	include "connect.php"
?>

<div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		    <?php
              $id=$_SESSION["id"];
              $q="SELECT u.ID_JABATAN,s.STATUS_ ".
                 "FROM user_staf u ".
                 "INNER JOIN staf s ON (u.ID_STAF=s.ID_STAF) ".
                 "WHERE u.ID_USER='$id'";
             // echo $q;
              $res=mysqli_query($con,$q);
              $level=mysqli_fetch_array($res);
              if ($level['ID_JABATAN']=="111")
              {
                ?>
                   <ul id="menu" >
			        <li id="menu-home" ><a href="index.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
			        <li><a href="#"><i class="fa fa-user"></i><span>Staf</span><span class="fa fa-angle-right" style="float: right"></span></a>
			          <ul>
			            <li><a href="profil.php">Profil</a></li>
			            <li><a href="liststaf.php">List staf</a></li>
			            <li><a href="jabatan.php">Jabatan</a></li>			            
			            <?php
			            	if ($level["STATUS_"]=="PENSIUN")
			            	{
			            		?>
			            		   <li><a href="pensiun.php">Upload File Pensiun</a></li>
			            		<?php
			            	}
			            ?>
			          </ul>
			        </li>
			        </li>
			        <li id="menu-academico" ><a href="#"><i class="	fa fa-list"></i><span>Presensi</span><span class="fa fa-angle-right" style="float: right"></span></a>
			          <ul id="menu-academico-sub" >
			          	<li><a href="shift.php">Shift</a></li>
			          	<li><a href="jadwalshift.php">Jadwal Shift</a></li>
			          	<li><a href="importexcel.php">Presensi</a></li>

			          </ul>
			        </li>
			        <li id="menu-academico" ><a href="#"><i class="fa fa-file-text"></i><span>Permohonan</span><span class="fa fa-angle-right" style="float: right"></span></a>
			          <ul id="menu-academico-sub" >
			          	<li id="menu-academico-boletim" ><a href="harilibur.php">Set hari libur</a></li>
			          	<li id="menu-academico-boletim" ><a href="sakitadmin.php">Sakit</a></li>
			            <li id="menu-academico-avaliacoes" ><a href="cutiadmin.php">Cuti</a></li>
			            <li id="menu-academico-avaliacoes" ><a href="lemburadmin.php">Lembur</a></li>
			            <li id="menu-academico-avaliacoes" ><a href="izinadmin.php">Izin</a></li>
			            <li id="menu-academico-avaliacoes" ><a href="undurdiriadmin.php">Undur Diri</a></li>		           
			          </ul>
			        </li>
			        <li id="menu-academico" ><a href="#"><i class="fa fa-bar-chart""></i><span>Evaluasi</span><span class="fa fa-angle-right" style="float: right"></span></a>
			          <ul id="menu-academico-sub" >
			          	<li id="menu-academico-boletim" ><a href="evaluasi.php">Evaluasi</a></li>
			            <li id="menu-academico-avaliacoes" ><a href="evaluasipegawai.php">Penilaian</a></li>
			            <li id="menu-academico-avaliacoes" ><a href="sanksi.php">Sanksi</a></li>		           
			          </ul>
			        </li>
			        <li><a href="training.php"><i class="fa fa-cogs"></i><span>Training</span></a></li>
			        <li><a href="gaji.php"><i class="fa fa-credit-card"></i><span>Gaji</span></a></li>			        
			        <li><a href="hakakses.php"><i class="fa fa-cog"></i><span>Hak Akses</span></a></li>
			      </ul>
                <?php
              }
              //admin
              else if ($level['ID_JABATAN']=="114")
              {
                ?>
                  <ul id="menu" >
			        <li id="menu-home" ><a href="index.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
			        <li><a href="#"><i class="fa fa-user"></i><span>Staf</span><span class="fa fa-angle-right" style="float: right"></span></a>
			          <ul>
			            <li><a href="profil.php">Profil</a></li>
			            <li><a href="liststaf.php">List staf</a></li>	            
			            <?php
			            	if ($level["STATUS_"]=="PENSIUN")
			            	{
			            		?>
			            		   <li><a href="pensiun.php">Upload File Pensiun</a></li>
			            		<?php
			            	}
			            ?>
			          </ul>
			        </li>
			        <li id="menu-academico" ><a href="#"><i class="fa fa-file-text"></i><span>Permohonan</span><span class="fa fa-angle-right" style="float: right"></span></a>
			          <ul id="menu-academico-sub" >
			          	<li id="menu-academico-boletim" ><a href="sakitstaf.php">Sakit</a></li>
			            <li id="menu-academico-avaliacoes" ><a href="cutistaf.php">Cuti</a></li>
			            <li id="menu-academico-avaliacoes" ><a href="lemburstaf.php">Lembur</a></li>
			            <li id="menu-academico-avaliacoes" ><a href="izinstaf.php">Izin</a></li>
			            <li id="menu-academico-avaliacoes" ><a href="undurdiristaf.php">Undur Diri</a></li>		           
			          </ul>
			        </li>
			        <li><a href="importexcel.php"><i class="fa fa-cog"></i><span>Presensi</span></a></li>
			        <li><a href="training.php"><i class="fa fa-cogs"></i><span>Training</span></a></li>
                <?php
              }
              //manajer
              else if ($level['ID_JABATAN']=="113")
              {
                ?>
                <ul id="menu" >
			       <li id="menu-home" ><a href="index.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
                   <li><a href="#"><i class="fa fa-user"></i><span>Staf</span><span class="fa fa-angle-right" style="float: right"></span></a>
			          <ul>
			            <li><a href="profil.php">Profil</a></li>		            
			            <?php
			            	if ($level["STATUS_"]=="PENSIUN")
			            	{
			            		?>
			            		   <li><a href="pensiun.php">Upload File Pensiun</a></li>
			            		<?php
			            	}
			            ?>
			          </ul>
			        </li>
                   <li id="menu-academico" ><a href="#"><i class="fa fa-file-text"></i><span>Permohonan</span><span class="fa fa-angle-right" style="float: right"></span></a>
			          <ul id="menu-academico-sub" >
			          	<li id="menu-academico-boletim" ><a href="sakitstaf.php">Sakit</a></li>
			            <li id="menu-academico-avaliacoes" ><a href="cutistaf.php">Cuti</a></li>
			            <li id="menu-academico-avaliacoes" ><a href="lemburstaf.php">Lembur</a></li>
			            <li id="menu-academico-avaliacoes" ><a href="izinstaf.php">Izin</a></li>
			            <li id="menu-academico-avaliacoes" ><a href="undurdiristaf.php">Undur Diri</a></li>		           
			          </ul>
			        </li>
			        <li><a href="evaluasipegawai.php"><i class="fa fa-bar-chart"></i><span>Penilaian</span></a></li>
			        <li><a href="sanksi.php"><i class="fa fa-bar-chart"></i><span>Sanksi</span></a></li>
			    </ul>
                <?php
              }
              //supervisor
              else if ($level['ID_JABATAN']=="115")
              {
                ?>
                <ul id="menu" >
			       <li id="menu-home" ><a href="index.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
                   <li><a href="#"><i class="fa fa-user"></i><span>Staf</span><span class="fa fa-angle-right" style="float: right"></span></a>
			          <ul>
			            <li><a href="profil.php">Profil</a></li>		            
			            <?php
			            	if ($level["STATUS_"]=="PENSIUN")
			            	{
			            		?>
			            		   <li><a href="pensiun.php">Upload File Pensiun</a></li>
			            		<?php
			            	}
			            ?>
			          </ul>
			        </li>
                   <li id="menu-academico" ><a href="#"><i class="fa fa-file-text"></i><span>Permohonan</span><span class="fa fa-angle-right" style="float: right"></span></a>
			          <ul id="menu-academico-sub" >
			          	<li id="menu-academico-boletim" ><a href="sakitstaf.php">Sakit</a></li>
			            <li id="menu-academico-avaliacoes" ><a href="cutistaf.php">Cuti</a></li>
			            <li id="menu-academico-avaliacoes" ><a href="lemburstaf.php">Lembur</a></li>
			            <li id="menu-academico-avaliacoes" ><a href="izinstaf.php">Izin</a></li>
			            <li id="menu-academico-avaliacoes" ><a href="undurdiristaf.php">Undur Diri</a></li>		           
			          </ul>
			        </li>
			        <li><a href="evaluasipegawai.php"><i class="fa fa-bar-chart"></i><span>Penilaian</span></a></li>
			        <li><a href="sanksi.php"><i class="fa fa-bar-chart"></i><span>Sanksi</span></a></li>
			    </ul>
                <?php
              }
              else 
              {
                ?>
                <ul id="menu" >
			       <li id="menu-home" ><a href="index.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
                   <li><a href="#"><i class="fa fa-user"></i><span>Staf</span><span class="fa fa-angle-right" style="float: right"></span></a>
			          <ul>
			            <li><a href="profil.php">Profil</a></li>		            
			            <?php
			            	if ($level["STATUS_"]=="PENSIUN")
			            	{
			            		?>
			            		   <li><a href="pensiun.php">Upload File Pensiun</a></li>
			            		<?php
			            	}
			            ?>
			          </ul>
			        </li>
                   <li id="menu-academico" ><a href="#"><i class="fa fa-file-text"></i><span>Permohonan</span><span class="fa fa-angle-right" style="float: right"></span></a>
			          <ul id="menu-academico-sub" >
			          	<li id="menu-academico-boletim" ><a href="sakitstaf.php">Sakit</a></li>
			            <li id="menu-academico-avaliacoes" ><a href="cutistaf.php">Cuti</a></li>
			            <li id="menu-academico-avaliacoes" ><a href="lemburstaf.php">Lembur</a></li>
			            <li id="menu-academico-avaliacoes" ><a href="izinstaf.php">Izin</a></li>
			            <li id="menu-academico-avaliacoes" ><a href="undurdiristaf.php">Undur Diri</a></li>		           
			          </ul>
			        </li>
			    </ul>
                <?php
              }
            ?>
		      
		    </div>
	 </div>
	 <div class="clearfix"> </div>
</div>
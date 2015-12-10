<?php
session_start();

if(!isset($_SESSION['username'])){
  header("location:index.php");
}
	//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

if($_SESSION['level']!="umum"){
  header("location:index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KELURAHAN SEMOLOWARU</title>
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
<meta name="keywords" content="free css templates, web design, 2-column, html css" />
<meta name="description" content="Web Design is a 2-column website template (HTML/CSS) provided by templatemo.com" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<!--////// CHOOSE ONE OF THE 3 PIROBOX STYLES  \\\\\\\-->
<link href="css_pirobox/white/style.css" media="screen" title="shadow" rel="stylesheet" type="text/css" />
<!--<link href="css_pirobox/white/style.css" media="screen" title="white" rel="stylesheet" type="text/css" />
<link href="css_pirobox/black/style.css" media="screen" title="black" rel="stylesheet" type="text/css" />-->
<!--////// END  \\\\\\\-->

<!--////// INCLUDE THE JS AND PIROBOX OPTION IN YOUR HEADER  \\\\\\\-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/piroBox.1_2.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$().piroBox({
			my_speed: 600, //animation speed
			bg_alpha: 0.5, //background opacity
			radius: 4, //caption rounded corner
			scrollImage : false, // true == image follows the page, false == image remains in the same open position
			pirobox_next : 'piro_next', // Nav buttons -> piro_next == inside piroBox , piro_next_out == outside piroBox
			pirobox_prev : 'piro_prev',// Nav buttons -> piro_prev == inside piroBox , piro_prev_out == outside piroBox
			close_all : '.piro_close',// add class .piro_overlay(with comma)if you want overlay click close piroBox
			slideShow : 'slideshow', // just delete slideshow between '' if you don't want it.
			slideSpeed : 4 //slideshow duration in seconds(3 to 6 Recommended)
	});
});
</script>
<!--////// END  \\\\\\\-->


<!-- Start css3menu.com HEAD section -->
<link rel="stylesheet" href="index_files/css3menu1/style.css" type="text/css" />
<!-- End css3menu.com HEAD section -->

</head>
<body>

<div id="templatemo_body_wrapper">
<div id="templatemo_wrapper">

	<div id="tempaltemo_header">
    	<span id="header_icon"></span>
    	<div id="header_content">
        	<div id="site_title">
				<img src="images/templatemo_logo.png" alt="LOGO" /> </div>
           </div>
    </div> <!-- end of header -->
    
    


<div id="templatemo_main_top"></div>
    <div id="templatemo_main"><span id="main_top"></span><span id="main_bottom"></span>
        <!-- Start css3menu.com BODY section id=1 -->
<ul id="css3menu1" class="topmenu">

	<li class="toplast"><a href="?kelurahan=home" style="height:17px;line-height:17px;width:107px;">Homepage</a></li>
	<li class="toplast"><a href="?kelurahan=profil" style="height:17px;line-height:17px;width:107px;">Profil</a></li>
	<li class="toplast"><a href="?kelurahan=struktur" style="height:17px;line-height:17px;width:107px;">Struktur</a></li>
	<li class="toplast"><a href="?kelurahan=visimisi" style="height:17px;line-height:17px;width:107px;">Visi & Misi</a></li>
	<li class="toplast"><a href="?kelurahan=galery" style="height:17px;line-height:17px;width:107px;">Galeri</a></li>
	<li class="toplast"><a href="?kelurahan=berita" style="height:17px;width:107px;line-height:17px;">Berita</a></li>
	<li class="toplast"><a href="logout.php" onClick="return confirm('Apakah Anda Yakin Untuk Logout ?')" style="height:17px;width:107px;line-height:17px;">Logout</a></li>

	
	
	

</ul>
<p style="display:none"><a href="http://css3menu.com/">CSS3 Menus Drop Down Css3Menu.com</a></p>
<!-- End css3menu.com BODY section -->    	
        <div id="templatemo_sidebar">


        	<div id="templatemo_menu"><br/>
                <ul>
                   
  	<li><a href="?kelurahan=daftarantrianumum" target="_parent">Antrian</a></li>
  	<li><a href="?kelurahan=rekammedikpoliumum" target="_parent">Rekam Medik Poli Umum</a></li>
  	<li><a href="?kelurahan=cetaklaporanpoliumum" target="_parent">Cetak Laporan Poli Umum</a></li>
  	<li><a href="?kelurahan=grafikumum" target="_parent">Grafik</a></li>
  	<li><a href="?kelurahan=akunumum" target="_parent">Akun</a></li>
	

		           </ul>    	
            </div> <!-- end of templatemo_menu -->
        
        	
            
                        <div class="sidebar_box">
            	<div class="sb_title">Berita</div>
                <div class="sb_content">
                <?php
				include "koneksi.php";
				$sql = mysql_query("SELECT * FROM berita ORDER BY idberita DESC LIMIT 3 ");

while($row = mysql_fetch_array($sql)){
?>                
				<div class="sb_news_box">
						<a href="?kelurahan=detailberita&idberita=<?php echo $row['idberita'];?>"><?php echo $row['judul'];?></a>
                        <span>Bangkalan, <? $bulan_long=array('Januari','Februari','Maret','April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'Nopember', 'Desember');
								$tgl_temp=explode("-",$row['tanggal']); 
						$tgl=$tgl_temp[2];
						$bln=$bulan_long[$tgl_temp[1]-1]; 
						$thn=$tgl_temp[0]; 		
						echo " "; echo $tgl ; echo " "; echo $bln; echo " ";echo $thn;echo " "; ?></span>					
                    </div>
                <?php
				}
				?>    
                        
                    <a href="?kelurahan=berita"><strong>View All</strong></a>
               </div>
               
              <div class="sb_bottom"></div>  
                        
            </div>
            
           
            
            <div class="cleaner"></div>
        </div> <!-- end of sidebar -->
        
        <div id="templatemo_content"><br/>
        	<?php
			
			include "content.php";
            

?>
                <div class="cleaner"></div>
            </div>
            
            
            
        
        <div class="cleaner"></div>    
    </div>
    
    <div id="templatemo_main_bottom">
    </div>

</div> <!-- end of wrapper -->
</div>

<div id="templatemo_footer_wrapper">
	<div id="templatemo_footer">
        Copyright @ 2013 Team IBM 
        
    </div>
</div>

</body>
</html>
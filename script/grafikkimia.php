<?php 
	session_start(); 
	include "../koneksi.php"; 
	//cek apakah user sudah login 
	if(!isset($_SESSION['username'])){ 
	?><script language='javascript'>alert('Anda belum login. Silahkan login dulu');
document.location='../index.php'</script><?
	    //jika belum login jangan lanjut.. 
	} 
?>
<html>
<head>
<title>Sistem Informasi Puskesmas</title>
<link rel="stylesheet" type="text/css" href="../style.css" />
</head>

<body>

   <!-- Begin Wrapper -->
  <div id="wrapper">
   
         <!-- Begin Header -->
         <div id="header"></div>
		 <!-- End Header -->
		 <div id="menu">
		 <div class="menu">
		 <font size='6' color='white'><marquee>Sistem Informasi Puskesmas Kamal, Bangkalan</marquee></font>
		 </div>
		 </div>
		  
		 <!-- Begin left Column -->

		 <div id="leftcolumn">
		</br>
		<img src='../image/kiri2.png'></img><br><br>
        <div id="tombol">
		<div class="tombol">
		<la><a href='lab.php'>HOME</a></la>
		</div>
		</div>
		<div id="tombol">
		<div class="tombol">
		<la><a href='grafikdarah.php'>LAB CEK DARAH</a></la>
		</div>
		</div>
		<div id="tombol">
		<div class="tombol">
		<la><a href='grafikkimia.php'>LAB KIMIA KLINIK</a></la>
		</div>
		</div>
		<div id="tombol">
		<div class="tombol">
		<la><a href='../logout.php'>LOG OUT</a></la>
		</div>
		</div>
		<?php 
			include "calender.php"; 
		?>
		
		</div>
         
		 <!-- End left Column -->
		 
		 <!-- Begin right Column -->

		 <div id="rightcolumn">
		 <br><br>
		 <?PHP
		 $tahun = "Select distinct year(tgl_pemeriksaan) from t_kimiaklinik";
		 $eks =mysql_query($tahun);
		 ?>
		<form action="grafkimia.php" method="post" target='_blank'>
				<h2>STATISTIKA LAB KIMIA KLINIK</h2><br>
				<select name="tahun" id="tahun">
							<option value="">--PILIH TAHUN--</option>
					<? while ($row = mysql_fetch_array ($eks)) {?>
   						 <option value="<?=$row['year(tgl_pemeriksaan)']?>"><?echo $row['year(tgl_pemeriksaan)'];?></option>
					<?}?>	
				</select>
				<input type="submit" name="cetak" value="LIHAT" />
			</form>
                  	 
		 </div>
         
		 <!-- End right Column -->
		 
		
		 <!-- Begin Footer -->
		 <div id="footer"></div>
		 <!-- End Footer -->
		 
   </div>
   <!-- End Wrapper -->
</body>
</html>

                       
                
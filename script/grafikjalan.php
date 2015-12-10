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
		<la><a href='pasien.php'>HOME</a></la>
		</div>
		</div>
		<div id="tombol">
		<div class="tombol">
		<la><a href='grafikjalan.php'>RAWAT JALAN</a></la>
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
		 $tahun = "Select distinct year(tgl_periksa) from rawat_jalan";
		 $eks =mysql_query($tahun);
		 $status = "Select distinct status from rawat_jalan";
		 $eks2 =mysql_query($status);
		 ?>
		<form action="grafjalan.php" method="post" target='_blank'>
				<h2>STATISTIKA PASIEN</h2><br>
				<select name="tahun" id="tahun">
							<option value="">--PILIH TAHUN--</option>
					<? while ($row = mysql_fetch_array ($eks)) {?>
   						 <option value="<?=$row['year(tgl_periksa)']?>"><?echo $row['year(tgl_periksa)'];?></option>
					<?}?>	
				</select>
				<select name="status" id="status">
							<option value="">--PILIH POLI--</option>
					<? while ($row2 = mysql_fetch_array ($eks2)) {?>
   						 <option value="<?=$row2['status']?>"><?echo $row2['status'];?></option>
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

                       
                
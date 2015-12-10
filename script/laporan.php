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
		<la><a href='../logout.php'>LOG OUT</a></la>
		</div>
		</div>
		<br><br><br><br><br><br><br><br>
		<?php 
			include "calender.php"; 
		?>
		
		</div>
         
		 <!-- End left Column -->
		 
		 <!-- Begin right Column -->

		 <div id="rightcolumn">
		 <br><br><br>
		<h1>CETAK LAPORAN PENYAKIT</h1>
				<br/><br/>
				  <?
		  								$minta="select * from rawat_jalan";
										$tahun = "Select distinct year(tgl_periksa) from rawat_jalan";
										$bulan = "Select distinct monthname(tgl_periksa) from rawat_jalan";
										$eksekusi =mysql_query($minta);
										$eks =mysql_query($tahun);
										$eks2 =mysql_query($bulan);
										

			?>
				  <form action="cetaklaporan.php" method="post" target='_blank'>
				<select name="tahun" id="tahun">
							<option value="">--PILIH TAHUN--</option>
					<? while ($row = mysql_fetch_array ($eks)) {?>
   						 <option value="<?=$row['year(tgl_periksa)']?>"><?echo $row['year(tgl_periksa)'];?></option>
					<?}?>
				</select>
				<select name="bulan" id="bulan">
							<option value="">--PILIH BULAN--</option>
					<? while ($row2 = mysql_fetch_array ($eks2)) {?>
   						 <option value="<?=$row2['monthname(tgl_periksa)']?>"><?echo $row2['monthname(tgl_periksa)'];?></option>
					<?}?>	
				</select>
				<input name="diagnosa" id="diagnosa" size="25" type="text" value="Nama Penyakit<? echo $diagnosa  ?>"/><br><br>
				<input type="submit" name="cetak" value="CETAK" />
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

                       
                
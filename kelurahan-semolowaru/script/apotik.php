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
<html><link rel="shortcut icon" type="image/x-icon" href="../image/favicon.ico">
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
		<img src='../image/kiri2.png'></img></br></br>
        <div id="tombol">
		<div class="tombol">
		<la><a href='apotik.php'>HOME</a></la>
		</div>
		</div>
		<div id="tombol">
		<div class="tombol">
		<la><a href='masuk.php'>OBAT MASUK</a></la>
		</div>
		</div>
		<div id="tombol">
		<div class="tombol">
		<la><a href='keluar.php'>OBAT KELUAR</a></la>
		</div>
		</div>
		<div id="tombol">
		<div class="tombol">
		<la><a href='stok.php'>STOK</a></la>
		</div>
		</div><div id="tombol">
		<div class="tombol">
		<la><a href='peramalanstokobat.php'>PERAMALAN STOK OBAT</a></la>
		</div>
		</div>
		<div id="tombol">
		<div class="tombol">
		<la><a href='grafikAPOTIK.php'>GRAFIK</a></la>
		</div>
		</div>
		<div id="tombol">
		<div class="tombol">
		<la><a href='../logout.php'>LOG OUT</a></la>
		</div>
		</div>
		<br><br><br><br><br><br><br><br></br>
		<?php 
			include "calender.php"; 
		?>
		
		</div>
         
		 <!-- End left Column -->
		 
		 <!-- Begin right Column -->

		 <div id="rightcolumn">
			<br/><br/>
			<h1>Syarat Pelayanan Balai Pengobatan</h1>
				  <p>1.Membawa kartu identitas (KTP/ foto copy KK) untuk kunjungan pertama kali</p> <p>2.Membawa kartu berobat (ASKES / PESERTA ASKES, JPS / kartu sehat untuk gakin)</p> <p>3.Setiap pelanggan harus membayar diloket pendaftaran</p><p>4.Pelnggan dapat nomor antri dan menungu diruang tamu</p><h1>Biaya Pelayanan Balai Pengobatan</h1><p>1.Membayar biaya pelayanan sesai tarif perda, kecuali peserta ASKES dan pemegang kartu JPS</p><p>2.Pembayaran biaya dikasir</p>
				  
				  
         </div>
		 <!-- End right Column -->
		 
		
		 <!-- Begin Footer -->
		 <div id="footer"></div>
		 <!-- End Footer -->
		 
   </div>
   <!-- End Wrapper -->
</body>
</html>
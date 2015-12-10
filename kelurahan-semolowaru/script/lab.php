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
<head><link rel="shortcut icon" type="image/x-icon" href="../image/favicon.ico">
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
		<la><a href='lab.php'>HOME</a></la>
		</div>
		</div>
		<div id="tombol">
		<div class="tombol">
		<la><a href='darah.php'>LAB CEK DARAH</a></la>
		</div>
		</div>
		<div id="tombol">
		<div class="tombol">
		<la><a href='kimia.php'>LAB KIMIA KLINIK</a></la>
		</div>
		</div>
		<div id="tombol">
		<div class="tombol">
		<la><a href='grafikLAB.php'>GRAFIK</a></la>
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
			 <h1>Syarat Pelayanan Labortorium </h1>
				  <p>1.Membawa surat permintaan pemeriksaan laboratorium dari masing-masing unit pelayanan : BP umum / UGD / Poli Gigi / Poli KIR Haji.</p><p>2.Pemeriksaan laboratorium yang bisa dilakukan:</p><p>Seperti	: BSN (Gula Darah Puasa), 2JPP (Gula DarSah 2 Jam Sesudah Makan), GDA (Gula Darah Acak), CHOL (Kolesterol), UA (Asam Urat), SGOT (Fungsi Liver), SPGT (Fungsi Liver), BUN (Urea), CREAT (Kreatinin).</p>
				  <h1>Biaya Pelayanan Laboratorium </h1>
				  <p>1.Pelanggan membayar biaya sebelum dilakukan pemeriksaan laboratorium seuai dengan tarif perda kecuali ASKES / AKESKIN dan dari perusahaan yang bekerja sama dengan puskesmas.</p>
				  <h1>Prosedure Pelayanan</h1>
				  <p>1.Pelanggan datang sendiri atau dengan pendamping.</p><p>2.pelanggan memenuhi persyaratan yang dimaksud dalam point A.</p><p>3.Pelanggan dapat informasi tentang wakt lama pemeriksaan laboratorium.</p><p>4.Pelanggan harus membayar biaya pemeriksaan laboratorium sebelum melakukan pemeriksaan. </p><p>5.Pelanggan mendapatkan hasil pemeriksaan laboratorium untuk diteruskan kepada Dokter.</p>
				  
				  
         </div>
		 <!-- End right Column -->
		 
		
		 <!-- Begin Footer -->
		 <div id="footer"></div>
		 <!-- End Footer -->
		 
   </div>
   <!-- End Wrapper -->
</body>
</html>
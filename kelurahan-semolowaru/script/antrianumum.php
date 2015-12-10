<?php 
	session_start(); 
	 
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
<link rel="stylesheet" type="text/css" href="../style.css" /><link rel="shortcut icon" type="image/x-icon" href="../image/favicon.ico">
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
		</div><div id="tombol">
		<div class="tombol">
		<la><a href='antrianumum.php'>ANTRIAN TGL <?php echo date("Y-m-d");?></a></la>
		</div>
		</div>
		<div id="tombol">
		<div class="tombol">
		<la><a href='rawatjalan.php'>RAWAT JALAN</a></la>
		</div>
		</div>
		<div id="tombol">
		<div class="tombol">
		<la><a href='rujukan.php'>RUJUKAN</a></la>
		</div>
		</div>
		<div id="tombol">
		<div class="tombol">
		<la><a href='grafikjalan.php'>GRAFIK</a></la>
		</div>
		</div>
		<div id="tombol">
		<div class="tombol">
		<la><a href='laporan.php'>LAPORAN PENYAKIT</a></la>
		</div>
		</div>
		<div id="tombol">
		<div class="tombol">
		<la><a href='rekammedis.php'>REKAM MEDIS</a></la>
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
		 <br/><br/>
		 <h1>Syarat Pelayanan Pasien Rawat Inap dan Pasien Rawat Jalan</h1>
				  <p>1.Setiap pelanggan Rawat Inap harus melalui pemeriksaan / tindakan dari UGD 24jam</p><p>2.Membawa kartu berobat antara lain :</p><p>•	Pengguna layanan kartu ASKES harus membawa kartu Askes.</p><p>•	Pengguna layanan Gakin harus membawa kartu sehat / JPS</p><p>•	Pengguna layanan Umum harus membawa kartu tanda pengenal keluarga untuk berobat.</p><p>	• Pengguna baru langsung mendaftar ke loket dengan kartu identitas.</p>
				  <h1>Biaya Pembayaran Pasien Rawat Inap dan Pasien Rawat Jalan</h1>
				  <p>1.Pembayaran biaya perobatan ke kasir dilakukan setelah pelanggan / pasien dinyatakan sembuh / pulang paksa / dirujuk.</p><p>2.Pelanggan membayar biaya perawatan sesuai tarif pada perda kecuali pelanggan JPS / ASKES.</p>
				  <h1>Spesifikasi Produk</h1>
				  <p>1. Rawat Inap (berupa jasa)</p><p>2. Tindakan medis (berupa jasa)</p><p>3. Resep obat</p><p>4. Surat rujukan</p><p>5. Surat keterangan perawatan dan Surat keterangan pulang paksa</p>

	
                  	 
		 </div>
         
		 <!-- End right Column -->
		 
		
		 <!-- Begin Footer -->
		 <div id="footer"></div>
		 <!-- End Footer -->
		 
   </div>
   <!-- End Wrapper -->
</body>
</html>

                       
                
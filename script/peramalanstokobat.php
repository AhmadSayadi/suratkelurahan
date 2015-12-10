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

<?
include "../koneksi.php";
if(isset($_POST['Submit'])) {
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$jumlah = $_POST['jumlah'];
		
$perintah = "INSERT INTO stok VALUES ('','$id','$nama','$jumlah')";
				$hasil = mysql_query($perintah);
				if ($hasil) {
				?><script language="JavaScript">alert('Data Disimpan');
				document.location='stok.php'</script><?
				}else {
					echo "('sql:'.$perintah.mysql_error())";
				}
	} else {
	?>

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
		<la><a href='cetakdatastokperamalan.php' target='_blank'>CETAK DATA</a></la>
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
			
	<?php
	include "daftarstockperamalan.php";
	
	}
	?>              	 
	
         </div>
		 
		 <!-- End right Column -->
		 
		
		 <!-- Begin Footer -->
		 <div id="footer"></div>
		 <!-- End Footer -->
		 
   </div>
   <!-- End Wrapper -->
</body>
</html>
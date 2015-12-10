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
		<img src='../image/kiri2.png'></img></br></br>
        <div id="tombol">
		<div class="tombol">
		<la><a href='stok.php'>HOME</a></la>
		</div>
		</div>
		<div id="tombol">
		<div class="tombol">
		<la><a href='caristok.php'>CARI DATA</a></la>
		</div>
		</div>
		<div id="tombol">
		<div class="tombol">
		<la><a href='cetakdatastok.php' target='_blank'>CETAK DATA</a></la>
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
			<h1>DATA STOK OBAT</h1>
		<form name="form1" method="post" action="hasilcaristok.php">  
			PENCARIAN DATA STOK OBAT<br>
			<select name="kolom">
			<option value="id_obat">ID Obat</option>
			<option value="nama_obat">Nama Obat</option>
			</select>
			<input type="text" name="cari" id="cari"/>
			<input type="submit" value="CARI"/>  
			</form>
			<?php
				$kolom=$_POST['kolom'];
				$cari = $_POST['cari'];
				print("Kata Kunci ( $kolom ) :"  .  $cari);
				?>
		<table align='center' border="1">
        <tr align='center'>
          <td width="5%">No</td>
		  <td width="5%">ID</td>
          <td width="24%">Nama Obat</td>
		  <td width="10%">Jumlah Stok</td>
		  <td width="10%">Operasi</td>
		<?
$kolom=$_POST['kolom'];
$cari = $_POST['cari'];
$strSQL = "select * from stok where $kolom like '%$cari%'";
$qry= @mysql_query($strSQL);
if ($qry) {
while($baris=mysql_fetch_array($qry))
 {  
 print "<tr align=\"center\"align=\"middle\">
	<td>$baris[no]</td>
	<td>$baris[id_obat]</td>
	<td>$baris[nama_obat]</td>
	<td>$baris[jumlah]</td>
	
	<td align=center><a href=delstok.php?id=".$baris["no"].">Hapus</a>I<a href=editstok.php?id=".$baris["no"].">Edit</a></td>
	</tr>";
}
}					  
		?>	
		</tr> 
		</table>
			
         </div>
		 <!-- End right Column -->
		 
		
		 <!-- Begin Footer -->
		 <div id="footer"></div>
		 <!-- End Footer -->
		 
   </div>
   <!-- End Wrapper -->
</body>
</html>
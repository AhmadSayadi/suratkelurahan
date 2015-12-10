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
		<la><a href='rawatjalan.php'>HOME</a></la>
		</div>
		</div>
		<div id="tombol">
		<div class="tombol">
		<la><a href='carijalan.php'>CARI DATA</a></la>
		</div>
		</div>
		<div id="tombol">
		<div class="tombol">
		<la><a href='cetakjalan.php'>CETAK DATA</a></la>
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
		<h1>DATA PASIEN</h1>
				  <br/><br/>
				  <form name="form1" method="post" action="hasilcarijalan.php">  
			PENCARIAN DATA PASIEN<br>
			<select name="kolom">
			<option value="nama">Nama Pasien</option>
			<option value="nama_kk">Nama KK</option>
			<option value="id">ID</option>
			<option value="alamat">ALamat</option>
			</select>
			<input type="text" name="cari" id="cari"/>
			<input type="submit" value="CARI"/>  
			</form>
			<?php
				$cari = $_POST['cari'];
				$kolom=$_POST['kolom'];
				print("Kata Kunci ( $kolom ) :"  .  $cari);
				?>
				  <table align='center' border="1">
        <tr align='center'>
          <td width="3%">No</td>
		  <td width="5%">ID</td>
		  <td width="24%">NAMA PASIEN</td>
		  <td width="10%">JK</td>
		  <td width="10%">UMUR</td>
		  <td width="10%">Nama KK</td>
		  <td width="10%">ALAMAT</td>
		  <td width="10%">TGL PERIKSA</td>
		  <td width="10%">DIAGNOSA</td>
		  <td width="10%">KET</td>
		  <td width="10%">STATUS</td>
		  <td width="10%">Operasi</td>
		<?
$kolom=$_POST['kolom'];
$cari = $_POST['cari'];
$strSQL = "select * from rawat_jalan where $kolom like '%$cari%'";
$qry= @mysql_query($strSQL);
if ($qry) {
while($baris=mysql_fetch_array($qry))
 {  
 print "<tr align=\"center\"align=\"middle\">
	<td>$baris[no]</td>
	<td>$baris[id]</td>
	<td>$baris[nama]</td>
	<td>$baris[jenis_kelamin]</td>
	<td>$baris[umur]</td>
	<td>$baris[nama_kk]</td>
	<td>$baris[alamat]</td>
	<td>$baris[tgl_periksa]</td>
	<td>$baris[diagnosa]</td>
	<td>$baris[ket]</td>
	<td>$baris[status]</td>
	<td align=center><a href=deljalan.php?id=".$baris["no"].">Hapus</a>/<a href=editjalan.php?id=".$baris["no"].">Edit</a></td>
	</tr>";
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
<?
}
?>
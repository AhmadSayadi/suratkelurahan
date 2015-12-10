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
		 </br><br>
		<img src="../image/kiri2.png"></img><br><br>
        <div id="tombol">
		<div class="tombol">
		<la><a href='darah.php'>HOME</a></la>
		</div>
		</div>
		<div id="tombol">
		<div class="tombol">
		<la><a href='caridarah.php'>CARI DATA</a></la>
		</div>
		</div>
		<div id="tombol">
		<div class="tombol">
		<la><a href='cetakdarah.php'>CETAK DATA</a></la>
		</div>
		</div>
		<div id="tombol">
		<div class="tombol">
		<la><a href='../logout.php'>LOG OUT</a></la>
		</div>
		</div>
		<br><br><br><br><br></br>
		<?php 
			include "calender.php"; 
		?>
		
		</div>
         
		 <!-- End left Column -->
		 
		 <!-- Begin right Column -->

		 <div id="rightcolumn">
		 <br><br/>
				 <h1>DATA CEK DARAH</h1>
				  <br/><br/>
				  <form name="form1" method="post" action="hasilcaridarah.php">  
			PENCARIAN DATA CEK DARAH<br>
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
          <td width="2%">No</td>
		  <td width="2%">ID</td>
		  <td width="5%">Nama</td>
          <td width="5%">Umur</td>
		  <td width="5%">Nama KK</td>
		  <td width="5%">Alamat</td>
		  <td width="5%">Tgl Periksa</td>
		  <td width="5%">Hb</td>
		  <td width="5%">Leko</td>
		  <td width="5%">Led</td>
		  <td width="5%">Diff</td>
		  <td width="5%">Tr</td>
		  <td width="5%">Pcv</td>
		  <td width="5%">Widal</td>
		  <td width="10%">Operasi</td></tr>
		<?
$kolom=$_POST['kolom'];
$cari = $_POST['cari'];
$strSQL = "select * from tb_cekdarah where $kolom like '%$cari%'";
$qry= @mysql_query($strSQL);
if ($qry) {
while($baris=mysql_fetch_array($qry))
 {  
 print "<tr align=\"center\"align=\"middle\">
	<td>$baris[no]</td>
	<td>$baris[id]</td>
	<td>$baris[nama]</td>
	<td>$baris[umur]</td>
	<td>$baris[nama_kk]</td>
	<td>$baris[alamat]</td>
	<td>$baris[tgl_periksa]</td>
	<td>$baris[hb]</td>
	<td>$baris[leko]</td>
	<td>$baris[led]</td>
	<td>$baris[diff]</td>
	<td>$baris[tr]</td>
	<td>$baris[pcv]</td>
	<td>$baris[widal]</td>
	<td align=center><a href=deldarah.php?id=".$baris["no"].">Hapus</a> I <a href=editdarah.php?id=".$baris["no"].">Edit</a></td>
	</tr>";
}}
					  
		?>	
		 
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

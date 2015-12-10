<?php 
	session_start(); 
	include "../koneksi.php";
	//cek apakah user sudah login 
	if(!isset($_SESSION['username'])){ 
	?><script language='javascript'>alert('Anda belum login. Silahkan login dulu');
document.location='../index.php'</script><?
	    //jika belum login jangan lanjut.. 
	} 
$kolom=$_POST['kolom'];
$cari=$_POST[cari];	
$SQL2 = mysql_query("select * from t_kimiaklinik where $kolom like '%$cari%'");
$a2 = mysql_fetch_array($SQL2);
$SQL3 = mysql_query("select * from rawat_jalan where $kolom like '%$cari%'");
$a3 = mysql_fetch_array($SQL3);
$SQL5 = mysql_query("select * from tb_cekdarah where $kolom like '%$cari%'");
$a5 = mysql_fetch_array($SQL5);
	
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
		<img src='../image/kiri2.png'></img></br></br></br></br>
        <div id="tombol">
		<div class="tombol">
		<la><a href='loket.php'>HOME</a></la>
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
			<form name="form1" method="post" action="">  
			PENCARIAN DATA REKAM MEDIS<br>
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

				print("Kata Kunci ( $kolom ) :"  .  $cari);
				?>
				<br/><br/>
 
<!------------------------------------------------------------------------------------------------------>
<?
if($a2){?>	 
		 <table align='center' border="1">
		 <caption>Laboratorium Kimia Klinik</caption>
        <tr align='center'>
          <td width="2%">No</td>
		  <td width="2%">ID</td>
		  <td width="5%">Nama</td>
          <td width="5%">Umur</td>
		  <td width="5%">Nama KK</td>
		  <td width="5%">Alamat</td>
		  <td width="5%">Tgl Periksa</td>
		  <td width="5%">BSN</td>
		  <td width="5%">2JPP</td>
		  <td width="5%">GDA</td>
		  <td width="5%">Chol</td>
		  <td width="5%">UA</td>
		  <td width="5%">Sgot</td>
		  <td width="5%">Sgpt</td>
		  <td width="5%">BUN</td>
		  <td width="5%">creat</td>
		  </tr>
		<?
$strSQL2 = "select * from t_kimiaklinik where $kolom like '%$cari%'";
$qry2= @mysql_query($strSQL2);
while($baris2=mysql_fetch_array($qry2))
 {  
 print "<tr align=\"center\"align=\"middle\">
	<td>$baris2[no]</td>
	<td>$baris2[id]</td>
	<td>$baris2[nama]</td>
	<td>$baris2[umur]</td>
	<td>$baris2[nama_kk]</td>
	<td>$baris2[alamat]</td>
	<td>$baris2[tgl_pemeriksaan]</td>
	<td>$baris2[bsn]</td>
	<td>$baris2[jpp]</td>
	<td>$baris2[gda]</td>
	<td>$baris2[chol]</td>
	<td>$baris2[ua]</td>
	<td>$baris2[sgot]</td>
	<td>$baris2[sgpt]</td>
	<td>$baris2[bun]</td>
	<td>$baris2[creat]</td>
	</tr>";
}
			  
		?>	
		 
		</table>
<?}?>
<!------------------------------------------------------------------------------------------------------>
<?
if($a3){?>	 
<table align='center' border="1">
		 <caption>Rawat Jalan</caption>
        <tr align='center'>
          <td width="3%">No</td>
		  <td width="3%">ID</td>
		  <td width="24%">NAMA PASIEN</td>
		  <td width="10%">JK</td>
		  <td width="10%">UMUR</td>
		  <td width="5%">NAMA KK</td>
		  <td width="10%">ALAMAT</td>
		  <td width="10%">TGL PERIKSA</td>
		  <td width="10%">DIAGNOSA</td>
		  <td width="10%">KET</td>
		<?
$strSQL = "select * from rawat_jalan where $kolom like '%$cari%'";
$qry= @mysql_query($strSQL);
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
	</tr>";
}
			  
		?>	
		</tr> 
		</table>
<?}?>	
<!------------------------------------------------------------------------------------------------------>
<?
if($a5){?>	 
<table align='center' border="1">
		 <caption>Laboratorium Gula Darah</caption>
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
		<?
$strSQL = "select * from tb_cekdarah where $kolom like '%$cari%'";
$qry= @mysql_query($strSQL);
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
	</tr>";
}
			  
		?>	
		 
		</table>
<?}?>	
<!------------------------------------------------------------------------------------------------------>
         </div>
		 <!-- End right Column -->
		 
		
		 <!-- Begin Footer -->
		 <div id="footer"></div>
		 <!-- End Footer -->
		 
   </div>
   <!-- End Wrapper -->
</body>
</html>
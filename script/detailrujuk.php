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
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="en"><head>


<title>DETAIL RUJUKAN</title>
<style type="text/css" media="screen,print">
*{
	margin:0;
	padding:0;
}
body{
	background-color:black;
	color:black;
	font:normal 8pt/100% Arial,tahoma,sans-serif;
}
div.page{
	background-color:white;
	color:black;
	min-height:15cm;
	margin:1cm auto;
	padding: 0.5cm 1cm 1cm 1cm;
	width:30cm;
}
div.header{
	background-color:white;
	border-bottom:3px solid black;
	font-family:"Times New Roman",serif;	
	padding-bottom:.5cm;
	text-align:center;
	color:black;
}
div.header2{
	text-align:center;
	font-size:13pt;
	font-weight:bold;
	line-height:120%;
	padding-top:0.2cm;
}
div.header div.h1{
	font-size:16pt;
	font-weight:bold;
	line-height:18pt;	
}
div.header div.h2{
	font-size:16pt;	
	line-height:16pt;	
}
div.header div.h3{
	font-size:11pt;	
	line-height:12pt;	
}
div.content{
	margin-top:.2cm;
}
table.data{	
	border-collapse:collapse;
	width:100%;
}
th{
	padding:3px;
	border:1px solid black;
}
table.data td{
	padding:2px;
}
span.pilihan{
	border-bottom:1px dotted black;
}
</style>
<style type="text/css" media="print">
body{
	background-color:white;
}
div.page{
	margin:auto;
	min-height:29.5cm;
	margin:auto;
	padding:0 1cm;	
	width:21.5cm;
}
div.header{		
	padding-bottom:.5cm;
}
</style>
</head><body>
	<div class="page">
		<div class="header">
			<img style="float: left;" src="../image/bangkalan.jpg" width="90" height='90'>
			<div class="h2">PUSAT KESEHATAN MASYARAKAT</div>			
			<div class="h1">PUSKESMAS</div>
			<div class="h3">Jl. Kusuma Bangsa No. 23 Telp. 3011885 Kamal</div>
			<div class="h3">B A N G K A L A N</div>			
		</div>
		<div class="header2">			
			<div>RUJUKAN</div>
		</div>
		<div class="content">
		<br><br>
		<table class="data" border="1" cellpadding="0" cellspacing="0">
		<tr align='center'>
		  <th width="5%">ID</th>
		  <th width="24%">NAMA PASIEN</th>
		  <th width="10%">JENIS KELAMIN</th>
		  <th width="10%">UMUR</th>
		  <th width="10%">NAMA KK</th>
		  <th width="10%">TGL RUJUKAN</th>
		  <th width="10%">ALAMAT</th>
		  <th width="10%">DIAGNOSA</th>
		  <th width="10%">TERAPI</th>
		  <th width="10%">KET</th>
		  <th width="10%">PESERTA ASKES</th>
		  <th width="10%">NO. ASKES</th>
		  <th width="10%">RSUD TUJUAN</th>
		  <th width="10%">KOTA</th>
		  </tr>
		<?php
	$id = $_GET[id];

$sql = " Select *
		from rujukan
		where no='$id'";
$result = mysql_query($sql) or die(mysql_error());
while($baris=mysql_fetch_array($result))
 { 
print "<tr align=\"center\"align=\"middle\">
	<td>$baris[id]</td>
	<td>$baris[nama]</td>
	<td>$baris[jenis_kelamin]</td>
	<td>$baris[umur]</td>
	<td>$baris[nama_kk]</td>
	<td>$baris[tgl_rujukan]</td>
	<td>$baris[alamat]</td>
	<td>$baris[diagnosa]</td>
	<td>$baris[terapi]</td>
	<td>$baris[ket]</td>
	<td>$baris[status_askes]</td>
	<td>$baris[no_askes]</td>
	<td>$baris[rsud]</td>
	<td>$baris[kota]</td>
	</tr>";
}
					  
		?>
				</table>
		</div>
	</div>
	<div class='ttd'>
Kamal, <?=date("d F Y") ?><br><br>
Kepala Puskesmas<br><br><br><br><br><br><br>
<u><?php 
$mintas="select * from t_ptugas where jabatan = 'Kepala Puskesmas'";
$eksekusix=mysql_fetch_array(mysql_query($mintas));
echo $eksekusix['nama'];										
?></u><br><br>
NIP. <?php echo $eksekusix['nip'];?>
</div>
</body></html>
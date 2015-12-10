<?php 
	session_start(); 
	 include "../koneksi.php";
	//cek apakah user sudah login 
	if(!isset($_SESSION['username'])){ 
	?><script language='javascript'>alert('Anda belum login. Silahkan login dulu');
document.location='../index.php'</script><?
	    //jika belum login jangan lanjut.. 
	} 
?><link rel="shortcut icon" type="image/x-icon" href="../images/favicon.ico">
<html xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="en"><head>


<title>DATA PERIKSA POLI KIA</title>
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
	min-height:33cm;
	margin:1cm auto;
	padding: 0.5cm 1cm 1cm 1cm;
	width:21.5cm;
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
div.ttd{
	text-align:center;
	font-size:14pt;
	font-weight:normal;
	font-family:"Times New Roman";
	padding : 0 0 0 530px;
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
			<img style="float: left;" src="../images/bangkalan.jpg" width="90" height='90'>
			<div class="h2">PUSAT KESEHATAN MASYARAKAT</div>			
			<div class="h1">PUSKESMAS KAMAL</div>
			<div class="h3">Jl. Kusuma Bangsa No. 23 Telp. 3011885 Kamal</div>
			<div class="h3">B A N G K A L A N</div>				
		</div>
		<div class="header2">			
			<div>DATA PERIKSA POLI KIA</div>
		</div>
		<div class="content">
		<br><br>
		<table class="data" border="1" cellpadding="0" cellspacing="0">
		<tr align='center'>
		  <th width="3%">ID</th>
		  <th width="10%">Norekam Medik</th>
		  <th width="10%">Nama</th>
          <th width="10%">Alamat</th>
		  <th width="10%">Poli</th>
		  <th width="8%">Dokter</th>
		  <th width="8%">Kartu</th>
		  <th width="5%">Biaya</th>
		  <th width="10%">Tanggal</th>
		</tr>
		<?
			$tahun = $_POST['tanggal'];
			$bulan = $_POST['tanggal1'];
            
		  								$minta="select * from antrian where tanggalkunjungan BETWEEN '$_POST[tanggal]' AND '$_POST[tanggal1]' && poli='KIA'";
										$eksekusi =mysql_query($minta);
										$no=0;
										while($baris=mysql_fetch_array($eksekusi))
 { 
 $no=$no+1;
 $mintad="select * from pasien where norekammedik ='$baris[norekammedik]'";
 $eksekusid = mysql_fetch_array(mysql_query($mintad));
										
 print "<tr align=\"center\"align=\"middle\">
	<td>$no</td>
	<td>$baris[norekammedik]</td>
	<td>$eksekusid[namapasien]</td>
	<td>$eksekusid[alamatpasien]</td>
	<td>$baris[poli]</td>
	<td>$baris[dokter]</td>
	<td>$baris[status]</td>
	<td>$baris[biaya]</td>
	<td>$baris[tanggalkunjungan]</td>
	</tr>";
}
					  
		?>
				</table>
				<table class="data" border="1" cellpadding="0" cellspacing="0">
				<?
				$jum="SELECT SUM(biaya) as jum FROM antrian where tanggalkunjungan BETWEEN '$_POST[tanggal]' AND '$_POST[tanggal1]' && poli='KIA'";
				$eks = mysql_query($jum);
				while ($jumlah =mysql_fetch_array($eks)){
				print
				"<tr align=\"center\"align=\"middle\"><th>TOTAL</th><th width=\"145px\">$jumlah[jum]</th></tr>";
				}?>
				</table>
		
		<br><br><br><br>
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
		</div>
	</div>
</body></html>
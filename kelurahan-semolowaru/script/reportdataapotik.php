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


<title>Report Obat</title>
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
			<div class="h1">PUSKESMAS</div>
			<div class="h3">Jl. Kusuma Bangsa No. 23 Telp. 3011885 Kamal</div>
			<div class="h3">B A N G K A L A N</div>			
		</div>
		<div class="header2">			
			<div>REPORT OBAT</div>
		</div>
		<div class="content">
		<br><br><?php

			$id = $_GET['idrujukan'];
	
$sqls = "Select *
		from rujukan
		where idrujukan='$id'";
$results = mysql_query($sqls);
$rows = mysql_fetch_array($results);
//echo $rows['idantrian'];	
$sqlss = "Select *
		from antrian
		where idantrian='$rows[idantrian]'";
$resultss = mysql_query($sqlss);
$rowss = mysql_fetch_array($resultss);

$sql = " Select *
		from pasien
		where norekammedik='$rowss[norekammedik]'";
$result = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_array($result);
	?>
	   
	<div>
 <table width="100%" border="0" cellpadding="2" cellspacing="2">
            <tr>
              <td><table align="left" border="0" cellpadding="0" cellspacing="5">
			  <tbody>
			 
			   <tr>
                    <td width="20%"><div align="left">No Rekam Medik</div> </td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="25%"><div align="left"><?php echo $rowss['norekammedik']?></div></td>
					<td width="20%"><div align="left">Tanggal</div> </td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="25%"><div align="left"><?php 
					
			$bulan_long=array('Januari','Februari','Maret','April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'Nopember', 'Desember');
					
		
			$tgl_temp1=explode("-",date("Y-m-d")); 
						$tgl1=$tgl_temp1[2];
						$bln1=$bulan_long[$tgl_temp1[1]-1]; 
						$thn1=$tgl_temp1[0]; 		
						echo $tgl1; echo " ";	
						echo $bln1; echo " ";	
						echo $thn1; 	
					
					?></div></td></tr>
					<tr>
                    <td width="20%"><div align="left">Nama Pasien</div> </td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="25%"><div align="left"><?php 
	$erik = $row['namapasien'];
$str = strtoupper($erik);
echo $str;
	?></div></td>
				    <td width="20%"><div align="left">Umur</div></td>
                    <td width="5%"><div align="center">:</div></td> 
                   	<td width="25%"><div align="left">
	<?php
				$tgllahir =$row['tanggallahir'];
			$tglsekarang = date("Y-m-d");

			$query = "SELECT datediff('$tglsekarang', '$tgllahir')
					  as selisih";
			$hasil = mysql_query($query);
			$data = mysql_fetch_array($hasil);

			$tahun = floor($data['selisih']/365);
			$bulan = floor(($data['selisih'] - ($tahun * 365))/30);
			$hari = $data['selisih'] - $bulan * 30 - $tahun * 365;
			 
			 echo $tahun." Tahun";
			 echo " ";
			 echo $bulan." Bulan";
			 echo " ";
			 echo $hari." Hari";
	
	
	?></div></td>
                   
					</tr><tr>
                    <td width="20%"><div align="left">No Ktp Pasien</div> </td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="20%"><div align="left"><?php echo $row["noktppasien"]; ?></div>
				    <td width="20%"><div align="left">Alamat Pasien </div></td>
                    <td width="5%"><div align="center">:</div></td> 
                   	<td width="30%"><div align="left"><?php echo $row["alamatpasien"] ?></div></td>
                				</td>
				   
					</tr>
					<tr>
					
					  <td width="20%"><div align="left">No Telp</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="20%"><div align="left"><?php echo $row["notelppasien"] ?></div>
					
					</td>
				
					
				    <td><div align="left">Jenis Kelamin</div></td>
                    <td><div align="center">:</div></td>
                    <td><div align="left">
						<? echo $row["jeniskelamin"] ?></div>
                    </td>
				 	
                </tr>
        
				  	
				</tbody>
				</table>
				</td>
				</tr>
				</table>
				</form><br/>
			<h2>	Obat Yang Di Pesan :</h2><br/>
		<table class="data" border="1" cellpadding="0" cellspacing="0">
		<tr align='center'>
		  <th width="5%">No</th>
		  <th width="10%">Tanggal</th>
		  <th width="5%">ID</th>
          <th width="15%">Nama Obat</th>
		  <th width="5%">Jumlah</th>
		  <th width="5%">Harga</th>
		  <th width="5%">Sub Total</th>
		<?
			$tahun = $_POST['tahun'];
			$bulan = $_POST['bulan'];
           $no=0; 
		  								$minta="select * from obat_keluar where idrujukan= '$_GET[idrujukan]'";
									    $eksekusi =mysql_query($minta);
									while($baris=mysql_fetch_array($eksekusi))
 { 

					
			$bulan_long=array('Januari','Februari','Maret','April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'Nopember', 'Desember');
					
		
			$tgl_temp=explode("-",$baris['tgl_keluar']); 
						$tgl=$tgl_temp[2];
						$bln=$bulan_long[$tgl_temp[1]-1]; 
						$thn=$tgl_temp[0]; 		
							
							
 $no=$no+1;
 $resultd = mysql_fetch_array(mysql_query("SELECT * FROM obat where id_obat = '$baris[id_obat]'"));
							 $gg=$resultd['harga'];
 $harga=$gg;
 $jumlah=$baris['jumlah_keluar'];
 $hargatotal=$harga*$jumlah;

 print "<tr align=\"center\"align=\"middle\">
	<td>$no</td>
	<td>$tgl $bln $thn</td>
	<td>$baris[id_obat]</td>
	<td>$baris[nama_obat]</td>
	<td>$baris[jumlah_keluar]</td>
	<td>$gg</td>
	<td>$hargatotal</td>
	
	</tr>";
	$dd=$hargatotal+$dd;
}
					  
		?>
		<tr>
	<td colspan="6" align="right">Total Pembayaran Obat : Rp.</td>	
		
	<td align="center"><?php
	echo $dd;
	
	?></td>	
		</tr>
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
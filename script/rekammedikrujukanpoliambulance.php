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


<title>Data Pelayanan Ambulance</title>
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
			<div>Data Pelayanan Ambulance</div>
		</div>
		<div class="content">
		<br><br>
		
		
		<?php
include "../koneksi.php";

   $waktu3=date("Y-m-d");
$result = mysql_query("SELECT * FROM pasien");
?>
<!DOCTYPE html>
<html>
    <head>
      
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        

        
    </head>
    <body >

	
     
			
		 		 	<?php
			include "../koneksi.php";
			$id = $_GET['norekammedik'];
	
$sql = " Select *
		from pasien
		where norekammedik='$id'";
$result = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_array($result);
	?>
	<h2> No Rekam Medik : <?php echo $row['norekammedik']?> <br/><br/>           Nama Pasien : <u><?php 
	$erik = $row['namapasien'];
$str = strtoupper($erik);
echo $str;
	?></u>
	<br/>
	<br/>
	Umur     : 
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
	
	
	?>
	
	</h2>
	<div>
 <table width="100%" border="0" cellpadding="2" cellspacing="2">
            <tr>
              <td><table align="left" border="0" cellpadding="0" cellspacing="5">
			  <tbody>
			 
			   <tr>
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
				 	
                </tr><?php
$sqll = " Select *
		from antrian
		where idantrian='$_GET[idantrian]'";
$resultl = mysql_query($sqll) or die(mysql_error());
$rowl = mysql_fetch_array($resultl);
				?>
				  	
				</tbody>
				</table>
				</td>
				</tr>
				</table>
				</form>
				
				
				
				
				<?php
				$minta="select * from pelayanan where idantrian = '$_GET[idantrian]' && poli ='Ambulance'";
				$eksekusi =mysql_query($minta);
		
				if(mysql_num_rows($eksekusi) != 0){
				?>
				<br/>
				<h2>Daftar Pelayanan Ambulance</h2><br/>
		<table class="data" border="1" cellpadding="0" cellspacing="0">
		<tr align='center'>
		  <th width="3%">No</th>
		  <th width="10%">Tanggal</th>
		  <th width="10%">Tujuan</th>
		  <th width="10%">Keterangan</th>
		  <th width="8%">Bayar</th>
		 </tr>
		<?
		            
			$minta="select * from pelayanan where idantrian = '$_GET[idantrian]' && poli ='Ambulance'";
				$eksekusi =mysql_query($minta);
		$no=0;
										while($baris=mysql_fetch_array($eksekusi))
 { 
 $no=$no+1;
 $mintads="select * from dokter where nip ='$baris[dokter]'";
 $eksekusids = mysql_fetch_array(mysql_query($mintads));

							$bulan_long=array('Januari','Februari','Maret','April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'Nopember', 'Desember');
					$tgl_temp=explode("-",$baris['tanggal']); 
						$tgl=$tgl_temp[2];
						$bln=$bulan_long[$tgl_temp[1]-1]; 
						$thn=$tgl_temp[0]; 		
						$rowq = mysql_fetch_array(mysql_query("SELECT * FROM dokter where nip = '$baris[jenispelayanan]'"));
							$rowqs = mysql_fetch_array(mysql_query("SELECT * FROM setting where idsetting = '$baris[keterangan]'"));
							
								
 print "<tr align=\"center\"align=\"middle\">
	<td>$no</td>
	<td>$tgl $bln $thn</td>
	<td>$rowqs[namasetting]</td>
	<td>$baris[jenispelayanan]</td>
	<td>$baris[bayar]</td>

	</tr>";
}
					  
		?>
				</table>
				<table class="data" border="1" cellpadding="0" cellspacing="0">
				<?
				$jum="SELECT SUM(bayar) as jum FROM pelayanan where idantrian = '$_GET[idantrian]' && poli ='Ambulance'";
				$eks = mysql_query($jum);
				while ($jumlah =mysql_fetch_array($eks)){
				print
				"<tr align=\"center\"align=\"middle\"><th>TOTAL</th><th width=\"142px\">$jumlah[jum]</th></tr>";
				}?>
				</table>
				<br>
				<?php
				}
				?>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				<br><br>
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
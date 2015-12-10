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
		<la><a href='bayar.php'>HOME</a></la>
		</div>
		</div>
		<div id="tombol">
		<div class="tombol">
		<la><a href='caribayar.php'>CARI DATA</a></la>
		</div>
		</div>
		<div id="tombol">
		<div class="tombol">
		<la><a href='cetakbayar.php'>CETAK DATA</a></la>
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
		<br></br>
		<form name="form1" method="post" action="hasilcaribayar.php">  
			PENCARIAN DATA PEMBAYARAN<br>
			<select name="kolom">
			<option value="nama">Nama Pasien</option>
			<option value="poli">Poli</option>
			<option value="id_bayar">ID</option>
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
		  <td width="3%">ID</td>
		  <td width="10%">Nama</td>
          <td width="10%">Alamat</td>
		  <td width="10%">Poli</td>
		  <td width="8%">Status</td>
		  <td width="5%">Biaya</td>
		  <td width="10%">Tgl Pembayaran</td>
		  <td width="10%">Operasi</td></tr>
		<?
$kolom=$_POST['kolom'];
$cari = $_POST['cari'];
$strSQL = "select * from tb_transaksi where $kolom like '%$cari%'";
$qry= @mysql_query($strSQL);
if ($qry) {
while($baris=mysql_fetch_array($qry))
 {  
 print "<tr align=\"center\"align=\"middle\">
	<td>$baris[no]</td>
	<td>$baris[id_bayar]</td>
	<td>$baris[nama]</td>
	<td>$baris[alamat]</td>
	<td>$baris[poli]</td>
	<td>$baris[status]</td>
	<td>$baris[biaya]</td>
	<td>$baris[tgl_bayar]</td>
	<td align=center><a href=delbayar.php?id=".$baris["no"].">Hapus</a> I <a href=editbayar.php?id=".$baris["no"].">Edit</a></td>
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
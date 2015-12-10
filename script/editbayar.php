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

<?
if(isset($_POST['Submit'])) {
	$no = $_POST['no'];
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$poli = $_POST['poli'];
	$status = $_POST['status'];
	$biaya = $_POST['biaya'];
	$tgl_bayar = $_POST['tgl_bayar'];
		
$perintah = "update tb_transaksi set id_bayar='$id',nama='$nama',alamat='$alamat',poli='$poli',status='$status',biaya='$biaya',tgl_bayar='$tgl_bayar' where no=$no";
				$hasil = mysql_query($perintah);
				if ($hasil) {
				?><script language="JavaScript">alert('Data Disimpan');
				document.location='bayar.php'</script><?
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
		<?php
	$id = $_GET[id];
	
$sql = " Select *
		from tb_transaksi
		where no='$id'";
$result = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_array($result);
	?>
	<h1>DATA PEMBAYARAN</h1><br>
	<form id="form1" name="form1" method="post" action="">         
 <table width="80%" border="0" cellpadding="2" cellspacing="2">
            <tr>
              <td><table align="left" border="0" cellpadding="0" cellspacing="5">
			  <tbody>
			  <tr>
				  <td width="5%"><div align="center">1</div></td>
                    <td width="30%"><div align="left">No </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="no" id="no" size="25" readonly='true' type="text" value="<?=$row["no"] ?>"/></div></td> 
                </tr>
			   <tr>
                    <td width="5%"><div align="center">2</div></td>
                    <td width="30%"><div align="left">ID </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="id" id="id" size="25" type="text" value="<?=$row["id_bayar"] ?>"/></div>
					</td>
                <tr>
				  <td width="5%"><div align="center">3</div></td>
                    <td width="30%"><div align="left">Nama </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   
                   	<td width="50%"><div align="left"><input name="nama" id="nama" size="25" type="text" value="<?=$row["nama"] ?>"/></div></td>
                  
                </tr>
                <tr>
                    <td width="5%"><div align="center">4</div></td>
                    <td width="30%"><div align="left">Alamat </td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="alamat" id="alamat" size="25" type="text" value="<?=$row["alamat"] ?>"/></div>
					</td>
				</tr>
				<tr valign="top">
                    <td><div align="center">5</div></td>
                    <td><div align="left">Poli </div></td>
                    <td><div align="center">:</div></td>
                    <td><div align="left"><select name="poli">
									<option value="Layanan Anak">Layanan Anak</option>
									<option value="Layanan Ibu">Layanan Ibu</option>
									<option value="Lab Cek Darah">Lab Cek Darah</option>
									<option value="Lab Kimia Klinik">Lab Kimia Klinik</option>
									<option value="Rawat Inap">Rawat Inap</option>
									<option value="Rawat Jalan">Rawat Jalan</option>
									</select></div>
                    </td>
				  </tr>
                  <tr>
                    <td width="5%"><div align="center">6</div></td>
                    <td width="30%"><div align="left">Status </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><select name="status">
									<option value="Askes">Askes</option>
									<option value="JPS">JPS</option>
									<option value="Bayar">Bayar</option>
									</select></div>
					</td>
				</tr>
				<tr>
                    <td width="5%"><div align="center">7</div></td>
                    <td width="30%"><div align="left">Biaya  </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="biaya" id="biaya" size="25" value="<?=$row["biaya"] ?>"/></div>
					</td>
				</tr>
				<tr>
                    <td width="5%"><div align="center">8</div></td>
                    <td width="30%"><div align="left">Tgl Pembayaran  </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="tgl_bayar" id="tgl_bayar" size="25" type="text" value="<?=$row["tgl_bayar"] ?>"/>mis. 2011-10-25</div>
					</td>
				</tr>
				<tr>
				<th colspan="2" scope="row">&nbsp;</th>
	<td><div align="center"></div></td>
				<td><div align="left">
				<input type="Submit" name="Submit" value="Submit" />
				<input type="reset" value="reset" /></div></td>
				</tr>
				</tbody>
				</table>
				</td>
				</tr>
				</table>
				</form>
                  	 
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
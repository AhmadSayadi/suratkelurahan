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
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$umur = $_POST['umur'];
	$nama_kk = $_POST['nama_kk'];
	$tgl_masuk = $_POST['tgl_masuk'];
	$alamat = $_POST['alamat'];
	$diagnosa = $_POST['diagnosa'];
	$ket = $_POST['ket'];
	$status = $_POST['status'];
		
$perintah = "update rawat_jalan set id='$id',nama='$nama',jenis_kelamin='$jenis_kelamin',umur='$umur',nama_kk='$nama_kk',tgl_periksa='$tgl_masuk',alamat='$alamat',diagnosa='$diagnosa',ket='$ket',status='$status' where no=$no";
				$hasil = mysql_query($perintah);
				if ($hasil) {
				?><script language="JavaScript">alert('Data Disimpan');
				document.location='rawatjalan.php'</script><?
				}else {
					echo "Error id telah ada";
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
		
		<?php
	$id = $_GET[id];
	
$sql = " Select *
		from rawat_jalan
		where no='$id'";
$result = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_array($result);
	?>
                  <h1>DATA PASIEN</h1>
						  <br><br>
				<form id="form1" name="form1" method="post" action="">         
 <table width="80%" border="0" cellpadding="2" cellspacing="2">
            <tr>
            
            </tr>
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
                    <td width="30%"><div align="left">ID</div> </td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="id" id="id" size="25" type="text" value="<?=$row["id"] ?>"/></div></td>
                  
                </tr>
                <tr>
				  <td width="5%"><div align="center">3</div></td>
                    <td width="30%"><div align="left">Nama</div> </td>
                    <td width="5%"><div align="center">:</div></td>
                   
                   	<td width="50%"><div align="left"><input name="nama" id="nama" size="25" type="text" value="<?=$row["nama"] ?>"/></div></td>
                  
                </tr>
                <tr>
                    <td width="5%"><div align="center">4</div></td>
                    <td width="30%"><div align="left">Jenis Kelamin </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><select name="jenis_kelamin">
									<option value="L">Laki-laki</option>
									<option value="P">Perempuan</option></div>
									</select>
					</td>
				</tr>
				<tr valign="top">
                    <td><div align="center">5</div></td>
                    <td><div align="left">Umur </div></td>
                    <td><div align="center">:</div></td>
                    <td><div align="left"><input name="umur" size="25" type="text" id="umur" value="<?=$row["umur"] ?>" /></div>
                    </td>
				  </tr>
				  <tr valign="top">
                    <td><div align="center">6</div></td>
                    <td><div align="left">Nama KK </div></td>
                    <td><div align="center">:</div></td>
                    <td><div align="left"><input name="nama_kk" size="25" type="text" id="nama_kk" value="<?=$row["nama_kk"] ?>" /></div>
                    </td>
				  </tr>
                  <tr>
                    <td width="5%"><div align="center">7</div></td>
                    <td width="30%"><div align="left">Tanggal Periksa</div> </td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="tgl_masuk" id="tgl_masuk" size="25" type="text" value="<?=$row["tgl_periksa"] ?>"/>mis. 2011-10-25</div>
					</td>
				</tr>
				<tr>
                    <td width="5%"><div align="center">8</div></td>
                    <td width="30%"><div align="left">Alamat </div> </td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="alamat" id="alamat" size="25" value="<?=$row["alamat"] ?>"/></div>
					</td>
				</tr>
				<tr>
                    <td width="5%"><div align="center">9</div></td>
                    <td width="30%"><div align="left">Diagnosa </div> </td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="diagnosa" id="diagnosa" size="25" type="text" value="<?=$row["diagnosa"] ?>"/></div>
					</td>
				</tr>
				<tr>
                    <td width="5%"><div align="center">10</div></td>
                    <td width="30%"><div align="left">Keterangan </div> </td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><select name="ket">
									<option value="Askes">Askes</option>
									<option value="Bayar">Bayar</option>
									<option value="JPS">JPS</option>
									<option value="GRT">GRT</option></div>
									</select>
					</td>
				</tr>
				<tr>
                    <td width="5%"><div align="center">11</div></td>
                    <td width="30%"><div align="left">Status </div> </td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><select name="status">
									<option value="Layanan Anak">Layanan Anak</option>
									<option value="Layanan Ibu">Layanan Ibu</option>
									<option value="Rawat Jalan">Rawat Jalan</option>
									<option value="Rawat Inap">Rawat Inap</option>
									</div>
									</select>
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
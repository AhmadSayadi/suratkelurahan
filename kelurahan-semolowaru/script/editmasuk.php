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
	$jumlah = $_POST['jumlah'];
	$tgl = $_POST['tgl'];
$stock1=mysql_fetch_array(mysql_query("SELECT jumlah FROM stok WHERE id_obat = '$id' ")); 
$harga1=$stock1[0];
	
$stock2=mysql_fetch_array(mysql_query("SELECT jumlah_masuk FROM obat_masuk WHERE no = '$no' ")); 
$harga2=$stock2[0];

$harga3 = $harga1 - $harga2;

$harga4 = $harga3 + $jumlah;		
$update3 = mysql_query("UPDATE stok SET jumlah = '$harga4' WHERE id_obat = '$id'");
$perintah = "update obat_masuk set id_obat='$id',nama_obat='$nama',jumlah_masuk= $jumlah ,tgl_masuk='$tgl' where no=$no";
				$hasil = mysql_query($perintah);
				if ($hasil) {
				?><script language="JavaScript">alert('Data Disimpan');
				document.location='masuk.php'</script><?
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
		<img src='../image/kiri2.png'></img></br></br>
        <div id="tombol">
		<div class="tombol">
		<la><a href='masuk.php'>HOME</a></la>
		</div>
		</div>
		<div id="tombol">
		<div class="tombol">
		<la><a href='carimasuk.php'>CARI DATA</a></la>
		</div>
		</div>
		<div id="tombol">
		<div class="tombol">
		<la><a href='cetakmasuk.php'>CETAK DATA</a></la>
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
			<?php
	$id = $_GET[id];
$sql = " Select *
		from obat_masuk
		where no='$id'";
$result = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_array($result);
	?>
                  <h1>DATA OBAT MASUK</h1>
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
                    <td width="30%"><div align="left">ID </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="id" id="id" size="25" type="text" value="<?=$row["id_obat"] ?>"/></div>
					</td>
				</tr>
                <tr>
				  <td width="5%"><div align="center">3</div></td>
                    <td width="30%"><div align="left">Nama </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   
                   	<td width="50%"><div align="left"><input name="nama" id="nama" size="25" type="text" value="<?=$row["nama_obat"] ?>"/></div></td>
                  
                </tr>
				<tr valign="top">
                    <td><div align="center">4</div></td>
                    <td><div align="left">Jumlah </div></td>
                    <td><div align="center">:</div></td>
                    <td><div align="left"><input name="jumlah" size="25" type="text" id="jumlah" value="<?=$row["jumlah_masuk"] ?>" /></div>
                    </td>
				  </tr>
				  <tr valign="top">
                    <td><div align="center">5</div></td>
                    <td><div align="left">TGL Masuk </div></td>
                    <td><div align="center">:</div></td>
                    <td><div align="left"><input name="tgl" size="25" type="text" id="tgl" value="<?=$row["tgl_masuk"] ?>" />Mis. 2012-08-20</div>
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
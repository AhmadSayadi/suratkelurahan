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
	$umur = $_POST['umur'];
	$nama_kk = $_POST['nama_kk'];
	$alamat = $_POST['alamat'];
	$tgl_periksa = $_POST['tgl_periksa'];
	$hb = $_POST['hb'];
	$leko = $_POST['leko'];
	$led = $_POST['led'];
	$diff = $_POST['diff'];
	$tr = $_POST['tr'];
	$pcv = $_POST['pcv'];
	$widal = $_POST['widal'];
	$ket = $_POST['ket'];
	
$perintah = "update tb_cekdarah set id='$id',nama='$nama',umur='$umur',nama_kk='$nama_kk',alamat='$alamat',tgl_periksa='$tgl_periksa',hb='$hb',leko='$leko',led='$led',diff='$diff',tr='$tr',pcv='$pcv',widal='$widal',ket='$ket' where no=$no";
				$hasil = mysql_query($perintah);
				if ($hasil) {
				?><script language="JavaScript">alert('Data Disimpan');
				document.location='darah.php'</script><?
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
				  <?php
	
	$id = $_GET[id];
	
$sql = " Select *
		from tb_cekdarah
		where no='$id'";
$result = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_array($result);
	?>
                  <h1>DATA CEK DARAH</h1>
				  <br><br>
				  <form id="form1" name="form1"  action="">         
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
                   
                   	<td width="50%"><div align="left"><input name="id"  readonly="true" id="id" size="25" type="text" value="<?=$row["id"] ?>"/></div></td>
                  
                </tr>
                <tr>
				  <td width="5%"><div align="center">3</div></td>
                    <td width="30%"><div align="left">Nama </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   
                   	<td width="50%"><div align="left"><input name="nama"  readonly="true" id="nama" size="25" type="text" value="<?=$row["nama"] ?>"/></div></td>
                  
                </tr>
				<tr valign="top">
                    <td><div align="center">4</div></td>
                    <td><div align="left">Umur (Th) </div></td>
                    <td><div align="center">:</div></td>
                    <td><div align="left"><input name="umur" size="25" type="text" id="umur" value="<?=$row["umur"] ?>" /></div>
                    </td>
				  </tr>
				<tr valign="top">
                    <td><div align="center">5</div></td>
                    <td><div align="left">Nama KK </div></td>
                    <td><div align="center">:</div></td>
                    <td><div align="left"><input name="nama_kk" size="25"  readonly="true" type="text" id="nama_kk" value="<?=$row["nama_kk"] ?>" /></div>
                    </td>
				  </tr>
				<tr>
                    <td width="5%"><div align="center">6</div></td>
                    <td width="30%"><div align="left">Alamat  </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="alamat"  readonly="true" id="alamat" size="25" value="<?=$row["alamat"] ?>"/></div>
					</td>
				</tr>
				<tr>
                    <td width="5%"><div align="center">7</div></td>
                    <td width="30%"><div align="left">Tgl Periksa  </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="tgl_periksa"  readonly="true" id="tgl_periksa" size="25" type="text" value="<?=$row["tgl_periksa"] ?>"/>mis. 2011-10-25</div>
					</td>
				</tr>
				<tr>
                    <td width="5%"><div align="center">8</div></td>
                    <td width="30%"><div align="left">Hb  </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="hb"  readonly="true" id="hb" size="25" type="text" value="<?=$row["hb"] ?>"/></div>
					</td>
				</tr>
				<tr>
                    <td width="5%"><div align="center">9</div></td>
                    <td width="30%"><div align="left">leko  </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="leko"  readonly="true" id="leko" size="25" type="text" value="<?=$row["leko"] ?>"/></div>
					</td>
				</tr>
				<tr>
                    <td width="5%"><div align="center">10</div></td>
                    <td width="30%"><div align="left">led  </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="led"  readonly="true" id="led" size="25" type="text" value="<?=$row["led"] ?>"/></div>
					</td>
				</tr>
				<tr>
                    <td width="5%"><div align="center">11</div></td>
                    <td width="30%"><div align="left">diff  </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="diff"  readonly="true" id="diff" size="25" type="text" value="<?=$row["diff"] ?>"/></div>
					</td>
				</tr>
				<tr>
                    <td width="5%"><div align="center">12</div></td>
                    <td width="30%"><div align="left">tr  </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="tr"  readonly="true" id="tr" size="25" type="text" value="<?=$row["tr"] ?>"/></div>
					</td>
				</tr>
				<tr>
                    <td width="5%"><div align="center">13</div></td>
                    <td width="30%"><div align="left">pcv  </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="pcv"  readonly="true" id="pcv" size="25" type="text" value="<?=$row["pcv"] ?>"/></div>
					</td>
				</tr>
				<tr>
                    <td width="5%"><div align="center">14</div></td>
                    <td width="30%"><div align="left">widal  </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input readonly="true" name="widal" id="widal" size="25" type="text" value="<?=$row["widal"] ?>"/></div>
					</td>
				</tr>
				<tr>
                    <td width="5%"><div align="center">15</div></td>
                    <td width="30%"><div align="left">Keterangan </div> </td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="ket"  readonly="true" id="ket" size="25" type="text" value="<?=$row["ket"] ?>"/></div>
					</td>
				</tr>
				<tr>
				<th colspan="2" scope="row">&nbsp;</th>
	<td><div align="center"></div></td>
				<td><div align="left">
				
				</tr>
				</tbody>
				</table>
				</td>
				</tr>
				</table>				
				</form>
				<a href="darah.php"><img src="../image/undo.png" width="100"></a>
		
                  	 
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
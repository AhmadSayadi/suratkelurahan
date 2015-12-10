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
<html><link rel="shortcut icon" type="image/x-icon" href="../image/favicon.ico">
<head>
<title>Sistem Informasi Puskesmas</title>
<link rel="stylesheet" type="text/css" href="../style.css" />
</head>

<?
if(isset($_POST['Submit'])) {
	$id = $_POST['id'];
	$tgl_periksa = $_POST['tgl_periksa'];
	$nama = $_POST['nama'];
	$umur = $_POST['umur'];
	$nama_kk = $_POST['nama_kk'];
	$alamat = $_POST['alamat'];
	$bsn = $_POST['bsn'];
	$jpp = $_POST['jpp'];
	$gda = $_POST['gda'];
	$chol = $_POST['chol'];
	$ua = $_POST['ua'];
	$sgot = $_POST['sgot'];
	$sgpt = $_POST['sgpt'];
	$bun = $_POST['bun'];
	$creat = $_POST['creat'];
	
$perintah = "INSERT INTO t_kimiaklinik VALUES ('','$id','$tgl_periksa','$nama','$umur','$nama_kk','$alamat','$bsn','$jpp','$gda','$chol','$ua','$sgot','$sgpt','$bun','creat')";
				$hasil = mysql_query($perintah);
				if ($hasil) {
				?><script language="JavaScript">alert('Data Disimpan');
				document.location='kimia.php'</script><?
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
		<la><a href='lab.php'>HOME</a></la>
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

		 <div id="rightcolumn"><h1>FORM KLINIK KIMIA</h1>
				  <br>

		<form id="form1" name="form1" method="post" action="">         
 <table width="80%" border="0" cellpadding="2" cellspacing="2">
            <tr>
            
            </tr>
			
            <tr>
              <td><table align="left" border="0" cellpadding="0" cellspacing="5">
			  <tbody>
			  <tr>
                    <td width="5%"><div align="center">1</div></td>
                    <td width="30%"><div align="left">ID </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="id" id="id" size="25" type="text" value="<? echo $id ?>"/></div>
					</td>
                <tr>
			  <tr>
                    <td width="5%"><div align="center">2</div></td>
                    <td width="30%"><div align="left">Tgl Periksa  </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="tgl_periksa" id="tgl_periksa" size="25" type="text" value="<? echo $tgl_periksa ?>"/>mis. 2011-10-25</div>
					</td>
				</tr>
                <tr>
				  <td width="5%"><div align="center">3</div></td>
                    <td width="30%"><div align="left">Nama </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   
                   	<td width="50%"><div align="left"><input name="nama" id="nama" size="25" type="text" value="<? echo $nama ?>"/></div></td>
                  
                </tr>
				<tr valign="top">
                    <td><div align="center">4</div></td>
                    <td><div align="left">Umur (Th) </div></td>
                    <td><div align="center">:</div></td>
                    <td><div align="left"><input name="umur" size="25" type="text" id="umur" value="<? echo $umur ?>" /></div>
                    </td>
				  </tr>
				<tr valign="top">
                    <td><div align="center">5</div></td>
                    <td><div align="left">Nama KK </div></td>
                    <td><div align="center">:</div></td>
                    <td><div align="left"><input name="nama_kk" size="25" type="text" id="nama_kk" value="<? echo $nama_kk ?>" /></div>
                    </td>
				  </tr>
				<tr>
                    <td width="5%"><div align="center">6</div></td>
                    <td width="30%"><div align="left">Alamat  </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="alamat" id="alamat" size="25" value="<? echo $alamat ?>"/></div>
					</td>
				</tr>
				<tr>
                    <td width="5%"><div align="center">7</div></td>
                    <td width="30%"><div align="left">Bsn </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="bsn" id="bsn" size="25" type="text" value="<? echo $bsn ?>"/></div>
					</td>
				</tr>
				<tr>
                    <td width="5%"><div align="center">8</div></td>
                    <td width="30%"><div align="left">2jpp  </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="jpp" id="jpp" size="25" type="text" value="<? echo $jpp ?>"/></div>
					</td>
				</tr>
				<tr>
                    <td width="5%"><div align="center">9</div></td>
                    <td width="30%"><div align="left">gda  </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="gda" id="gda" size="25" type="text" value="<? echo $gda ?>"/></div>
					</td>
				</tr>
				<tr>
                    <td width="5%"><div align="center">10</div></td>
                    <td width="30%"><div align="left">chol  </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="chol" id="chol" size="25" type="text" value="<? echo $chol ?>"/></div>
					</td>
				</tr>
				<tr>
                    <td width="5%"><div align="center">11</div></td>
                    <td width="30%"><div align="left">ua  </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="ua" id="ua" size="25" type="text" value="<? echo $ua ?>"/></div>
					</td>
				</tr>
				<tr>
                    <td width="5%"><div align="center">12</div></td>
                    <td width="30%"><div align="left">sgot  </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="sgot" id="sgot" size="25" type="text" value="<? echo $sgot ?>"/></div>
					</td>
				</tr>
				<tr>
                    <td width="5%"><div align="center">13</div></td>
                    <td width="30%"><div align="left">sgpt  </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="sgpt" id="sgpt" size="25" type="text" value="<? echo $sgpt ?>"/></div>
					</td>
				</tr>
				<tr>
                    <td width="5%"><div align="center">14</div></td>
                    <td width="30%"><div align="left">bun  </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="bun" id="bun" size="25" type="text" value="<? echo $bun ?>"/></div>
					</td>
				</tr>
				<tr>
                    <td width="5%"><div align="center">15</div></td>
                    <td width="30%"><div align="left">creat  </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="creat" id="creat" size="25" type="text" value="<? echo $creat ?>"/></div>
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
		<?php } 
		include "cetakkimia.php";
		include "daftarkimia.php";
		?>
	
		 </div>
         
		 <!-- End right Column -->
		 
		
		 <!-- Begin Footer -->
		 <div id="footer"></div>
		 <!-- End Footer -->
		 
   </div>
   <!-- End Wrapper -->
</body>
</html>

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
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$umur = $_POST['umur'];
	$nama_kk = $_POST['nama_kk'];
	$tgl_rujukan = $_POST['tgl_rujukan'];
	$alamat = $_POST['alamat'];
	$diagnosa = $_POST['diagnosa'];
	$terapi = $_POST['terapi'];
	$ket = $_POST['ket'];
	$askes = $_POST['askes'];
	$noaskes = $_POST['noaskes'];
	$rsud = $_POST['rsud'];
	$kota = $_POST['kota'];
	
$perintah = "INSERT INTO rujukan VALUES ('','$id','$nama','$jenis_kelamin','$umur','$nama_kk','$tgl_rujukan','$alamat','$diagnosa','$terapi','$ket','$askes','$noaskes','$rsud','$kota')";
				$hasil = mysql_query($perintah);
				if ($hasil) {
				?><script language="JavaScript">alert('Data Disimpan');
				document.location='tambahrujuk.php'</script><?
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
		 </br></br>
		<img src='../image/kiri2.png'></img><br><br></br>
        <div id="tombol">
		<div class="tombol">
		<la><a href='pasien.php'>HOME</a></la>
		</div>
		</div>
		<div id="tombol">
		<div class="tombol">
		<la><a href='carirujuk.php'>CARI DATA</a></la>
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
		<br><br>
		<?php
	$id = $_GET[id];

$sql = " Select *
		from rawat_jalan
		where no='$id'";
$result = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_array($result);
	?>
                  <h1>DATA PASIEN</h1>
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
                    <td width="30%"><div align="left">Tanggal Rujukan</div> </td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="tgl_rujukan" id="tgl_rujukan" size="25" type="text" value="<? echo $tgl_rujukan ?>"/>mis. 2011-10-25</div>
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
									<option value="-">-</option>
									<option value="Askes">Askes</option>
									<option value="Bayar">Jamkesmas</option>
									<option value="JPS">Jamkesda</option>
									<option value="GRT">SPM</option>
									</div>
									</select></td>
				</tr>
				<tr>
                    <td width="5%"><div align="center">11</div></td>
                    <td width="30%"><div align="left">Peserta Askes </div> </td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><select name="askes">
									<option value="-">-</option>
									<option value="Peserta">Peserta</option>
									<option value="Suami">Suami</option>
									<option value="Isteri">Isteri</option>
									<option value="Anak">Anak</option>
									</div>
									</select></td>
				</tr>
				<tr>
                    <td width="5%"><div align="center">12</div></td>
                    <td width="30%"><div align="left">No. Askes</div> </td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="noaskes" id="noaskes" size="25" type="text" value="<? echo $noaskes ?>"/></td>
				</tr>
				<tr>
                    <td width="5%"><div align="center">13</div></td>
                    <td width="30%"><div align="left">Terapi yg sudah diberikan</div> </td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="terapi" id="terapi" size="25" type="text" value="<? echo $terapi ?>"/></td>
				</tr>
				<tr>
                    <td width="5%"><div align="center">14</div></td>
                    <td width="30%"><div align="left">Rumah Sakit Tujuan</div> </td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="rsud" id="rsud" size="25" type="text" value="<? echo $rsud ?>"/></td>
				</tr>
				<tr>
                    <td width="5%"><div align="center">15</div></td>
                    <td width="30%"><div align="left">Kota</div> </td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="kota" id="kota" size="25" type="text" value="<? echo $kota ?>"/></td>
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
		<br>
		 <font size='4'><h2>DATA RUJUKAN</h2></font>
	    
				  <table align='center' border="1">
        <tr align='center'>
          <td width="3%">No</td>
		  <td width="5%">ID</td>
		  <td width="15%">NAMA PASIEN</td>
		  <td width="3%">JK</td>
		  <td width="5%">UMUR</td>
		  <td width="5%">NAMA KK</td>
		  <td width="10%">TGL RUJUKAN</td>
		  <td width="7%">ALAMAT</td>
		  <td width="7%">DIAGNOSA</td>
		  <td width="10%">KET</td>
		  <td width="10%">RSUD</td>
		  <td width="10%">KOTA</td>
		  
		<?php
				$hal = $_GET[hal];
				if(!isset($_GET['hal'])){ 
					$page = 1; 
				}
				else{
					$page = $_GET['hal']; 
				} 
				$max_results = 5; 
				$from = (($page * $max_results) - $max_results);
		
				$tampil=mysql_query("select * from rujukan LIMIT $from, $max_results");
				$no=$from;
				while ($baris=mysql_fetch_array($tampil)){
					$no++;
					echo  "<tr align=\"center\"align=\"middle\">
	<td>$baris[no]</td>
	<td><a href=cetakrujuk.php?id=".$baris["no"]." target='_blank'>$baris[id]</a></td>
	<td>$baris[nama]</td>
	<td>$baris[jenis_kelamin]</td>
	<td>$baris[umur]</td>
	<td>$baris[nama_kk]</td>
	<td>$baris[tgl_rujukan]</td>
	<td>$baris[alamat]</td>
	<td>$baris[diagnosa]</td>
	<td>$baris[ket]</td>
	<td>$baris[rsud]</td>
	<td>$baris[kota]</td>
	</tr>";
}
}
					  
		?>	
		</tr> 
		</table>
		 <div align="center" style="font-size:12px; font-weight:bold;">
		<?php
		$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM rujukan"),0); 
		$total_pages = ceil($total_results / $max_results); 
		if($hal > 1){
			$prev = ($page - 1); 
    		echo "<a href=?page=data&hal=$prev><< Previous </a> "; 
		} 
		for($i = 1; $i <= $total_pages; $i++){ 
    		if(($hal) == $i){ 
       			echo "$i "; 
       		}
			else{ 
           		echo "<a href=?page=data&hal=$i>$i</a> "; 
    		} 
		} 
		//Buat Next Link 
		if($hal < $total_pages){ 
    		$next = ($page + 1); 
    		echo "<a href=?page=data&hal=$next>Next >></a>"; 
		} 
		?>
	</div>
		</div>
         
		 <!-- End right Column -->
		 
		
		 <!-- Begin Footer -->
		 <div id="footer"></div>
		 <!-- End Footer -->
		 
   </div>
   <!-- End Wrapper -->
</body>
</html>

<?
include "../koneksi.php";
if(isset($_POST['Submit'])) {
	$no = $_POST['no'];
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$jumlah = $_POST['jumlah'];
	$harga = $_POST['harga'];
	
		
$perintah = "update obat_masuk set jumlah_masuk='$jumlah' where no=$no";
				$hasil = mysql_query($perintah);
				if ($hasil) {
				?><script language="JavaScript">alert('Data Disimpan');
				document.location='apotik.php?puskesmas=daftarobatmasuk'</script><?
				}else {
					echo "Error id telah ada";
				}
	} else {
	?>


		 <div id="rightcolumn">
		
			<?php
	$id = $_GET[id];
	
$sql = " Select *
		from obat_masuk
		where no='$id'";
$result = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_array($result);
	?>
                   <div align="center" id="leftPango1"><span class="title">Edit Data Obat Masuk</span></div>
<br/>
                  <h2>Edit Data Obat Masuk</h2>
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
                    <td width="30%"><div align="left">ID </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="id" id="id" readonly='true' size="25" type="text" value="<?=$row["id_obat"] ?>"/></div>
					</td>
				</tr>
                <tr>
				  <td width="5%"><div align="center">3</div></td>
                    <td width="30%"><div align="left">Nama </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   
                   	<td width="50%"><div align="left"><input name="nama" id="nama" readonly='true' size="25" type="text" value="<?=$row["nama_obat"] ?>"/></div></td>
                  
                </tr>
				<tr valign="top">
                    <td><div align="center">4</div></td>
                    <td><div align="left">Jumlah</div></td>
                    <td><div align="center">:</div></td>
                    <td><div align="left"><input name="jumlah"  size="25" type="text" id="jumlah" value="<?=$row["jumlah_masuk"] ?>" /></div>
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

</body>
</html>
<?
}
?>
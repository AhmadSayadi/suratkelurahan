<?
include "../koneksi.php";
if(isset($_POST['Submit'])) {
	$no = $_POST['no'];
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$jumlah = $_POST['jumlah'];
	$harga = $_POST['harga'];
	
		
$perintah = "update obat set id_obat='$id',nama_obat='$nama',jumlah='$jumlah', harga='$harga' where no=$no";
				$hasil = mysql_query($perintah);
				if ($hasil) {
				?><script language="JavaScript">alert('Data Disimpan');
				document.location='apotik.php?puskesmas=daftarobat'</script><?
				}else {
					echo "Error id telah ada";
				}
	} else {
	?>


		 <div id="rightcolumn">
			<br/><br/>
			<?php
	$id = $_GET[id];
	
$sql = " Select *
		from obat
		where no='$id'";
$result = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_array($result);
	?>
                  <h2>Data Obat</h2>
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
                    <td><div align="left">Jumlah</div></td>
                    <td><div align="center">:</div></td>
                    <td><div align="left"><input name="jumlah" readonly="true" size="25" type="text" id="jumlah" value="<?=$row["jumlah"] ?>" /></div>
                    </td>
				  </tr><tr valign="top">
                    <td><div align="center">5</div></td>
                    <td><div align="left">Harga</div></td>
                    <td><div align="center">:</div></td>
                    <td><div align="left"><input name="harga" size="25" type="text" id="harga" value="<?=$row["harga"] ?>" /></div>
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
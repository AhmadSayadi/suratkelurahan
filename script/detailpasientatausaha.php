<html>


<link type="text/css" href="development-bundle/themes/base/ui.all.css" rel="stylesheet" />   

    <script type="text/javascript" src="development-bundle/jquery-1.3.2.js"></script>
    <script type="text/javascript" src="development-bundle/ui/ui.core.js"></script>
    <script type="text/javascript" src="development-bundle/ui/ui.datepicker.js"></script>
    
    <script type="text/javascript" src="development-bundle/ui/i18n/ui.datepicker-id.js"></script>
    <script type="text/javascript"> 
      $(document).ready(function(){
        $("#tanggal").datepicker({
		  dateFormat  : "yy-mm-dd",        
          changeMonth : true,
          changeYear  : true,
		  showOn          : "button",
          buttonImage     : "development-bundle/demos/datepicker/images/calendar.gif",
          buttonImageOnly : true			  
        });
		$( "#tanggal" ).change(function() {
             $( "#tanggal" ).datepicker( "option", "dateFormat","yy-mm-dd" );
         });

      });	  
    </script>      <script type="text/javascript"> 
      $(document).ready(function(){
        $("#tanggal1").datepicker({
		  dateFormat  : "yy-mm-dd",        
          changeMonth : true,
          changeYear  : true,
		  showOn          : "button",
          buttonImage     : "development-bundle/demos/datepicker/images/calendar.gif",
          buttonImageOnly : true			  
        });
		$( "#tanggal1" ).change(function() {
             $( "#tanggal1" ).datepicker( "option", "dateFormat","yy-mm-dd" );
         });

      });	  
    </script>   <SCRIPT LANGUAGE="JavaScript">
function numbersonly(e, decimal) {
	var key;
	var keychar;
	 if (window.event) {
	 key = window.event.keyCode;
	 } else
	 if (e) {
	 key = e.which;
	 } else return true;
	
	keychar = String.fromCharCode(key);
	if ((key==null) || (key==0) || (key==8) ||  (key==9) || (key==13) || (key==27) ) {
	return true;
	} else
	if ((("0123456789").indexOf(keychar) > -1)) {
	return true;
	} else
	if (decimal && (keychar == ".")) {
	return true;
	 } else return false;
	}
      </SCRIPT>
<?
include "koneksi.php";
if(isset($_POST['Submit'])) {
	$kk = $_POST['kk'];
	$notelppasien = $_POST['notelppasien'];
	$jeniskelamin = $_POST['jeniskelamin'];
	$norekammedik = $_POST['norekammedik'];
	$tanggallahir = $_POST['tanggallahir'];
	$noktppasien = $_POST['noktppasien'];
	$alamatpasien = $_POST['alamatpasien'];
	$namapasien = $_POST['namapasien'];
	$tempatlahir = $_POST['tempatlahir'];
	$namaibu = $_POST['namaibu'];
	$idpasien = $_GET['idpasien'];
		
$perintah = "update pasien set kk='$kk',jeniskelamin='$jeniskelamin',norekammedik='$norekammedik',tanggallahir='$tanggallahir',tempatlahir='$tempatlahir',noktppasien='$noktppasien',alamatpasien='$alamatpasien',namapasien='$namapasien',notelppasien='$notelppasien',namaibu='$namaibu' where idpasien= '$_GET[idpasien]'";
				$hasil = mysql_query($perintah);
				if ($hasil) {
				?><script language="JavaScript">alert('Data Disimpan');
				document.location='tatausaha.php?puskesmas=daftarpasien'</script><?
				}else {
					echo "('sql:'.$perintah.mysql_error())";
				}
	} else {
	$id = $_GET['idpasien'];
	
$sql = " Select *
		from pasien
		where idpasien='$id'";
$result = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_array($result);
	?>
	<div align="center" id="leftPango1"><span class="title">DETAIL PASIEN</span></div>
<div>
<br/>
	<h2>Detail Pasien</h2>
	<h5> No Rekam Medik : <?php echo $row['norekammedik']?> <br/>           Nama Pasien : <u><?php 
	$erik = $row['namapasien'];
$str = strtoupper($erik);
echo $str;
	?></u>
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
	
	</h5>
	<form id="form1" name="form1" method="post" action="">         
 <table width="100%" border="0" cellpadding="2" cellspacing="2">
            <tr>
              <td><table align="left" border="0" cellpadding="0" cellspacing="5">
			  <tbody>
			 
			   <tr>
                    <td width="22%"><div align="left">No Rekam Medik</div></td>
                    <td width="6%"><div align="center">:</div></td>
                   	<td width="22%"><div align="left"><input name="norekammedik" onkeypress="return numbersonly(event, false)" id="norekammedik" size="25" type="text" value="<? echo $row["norekammedik"] ?>"/></div>
					</td>
					  <td width="22%"><div align="left">No Telp</div></td>
                    <td width="6%"><div align="center">:</div></td>
                   	<td width="22%"><div align="left"><input name="notelppasien" onkeypress="return numbersonly(event, false)" id="notelppasien" size="25" type="text" value="<?php echo $row["notelppasien"] ?>"/></div>
					
					</tr>
					<tr>
					
					<td width="22%"><div align="left">No Ktp Pasien</div></td>
                    <td width="6%"><div align="center">:</div></td>
                   	<td width="22%"><div align="left"><input name="noktppasien" onkeypress="return numbersonly(event, false)" id="noktppasien" size="25" type="text" value="<?php echo $row["noktppasien"]; ?>"/></div>
				    <td width="22%"><div align="left">Tempat Lahir</td>
                    <td width="6%"><div align="center">:</div></td>
                   	<td width="22%"><div align="left"><input name="tempatlahir" id="tempatlahir" size="25" type="text" value="<?php echo $row["tempatlahir"] ?>"/></div>
					</td>
				
					</tr>
                <tr>
				    <td width="22%"><div align="left">Nama Pasien </div></td>
                    <td width="6%"><div align="center">:</div></td>
                   	<td width="22%"><div align="left"><input name="namapasien" id="namapasien" size="25" type="text" value="<? echo $row["namapasien"] ?>"/></div>
				    <td width="22%"><div align="left">Tanggal Lahir</td>
                    <td width="6%"><div align="center">:</div></td>
                   	<td width="22%"><div align="left"><input name="tanggallahir" id="tanggal" size="15" type="text" value="<?php echo $row["tanggallahir"] ?>"/></div>
					</td>
					
                </tr>
                <tr>
                    <td width="22%"><div align="left">Alamat Pasien </div></td>
                    <td width="6%"><div align="center">:</div></td> 
                   	<td width="22%"><div align="left"><input name="alamatpasien" id="alamatpasien" size="25" type="text" value="<?php echo $row["alamatpasien"] ?>"/></div></td>
                				</td>
				    <td><div align="left">Jenis Kelamin</div></td>
                    <td><div align="center">:</div></td>
                    <td><div align="left"><select name="jeniskelamin">
						<? if($row['jeniskelamin'] == "pria")
						{
						?>			<option value="<? echo $row["jeniskelamin"] ?>"><? echo $row["jeniskelamin"] ?></option>
									<option value="Wanita">Wanita</option>
									
							<?php }else {
						?>			<option value="<? echo $row["jeniskelamin"] ?>"><? echo $row["jeniskelamin"] ?></option>
									
									<option value="Pria">Pria</option>
						<?
						}
						?>	
							
						</select></div>
                    </td>
				
				</tr> <tr>
                    <td width="22%"><div align="left">KK  </div></td>
                    <td width="6%"><div align="center">:</div></td>
                   	<td width="22%"><div align="left"><input name="kk" id="kk" size="25" value="<? echo $row["kk"] ?>"/></div>
					</td>
				
                    <td width="22%"><div align="left">Nama Ibu  </div></td>
                    <td width="6%"><div align="center">:</div></td>
                   	<td width="22%"><div align="left"><select name="namaibu">
					<?php $rd = mysql_fetch_array(mysql_query("select * from pasien where norekammedik='$row[namaibu]'"));?>
									<option value="<?php echo $row['namaibu']; ?>"><?php echo $row['namaibu']; echo ", "; echo $rd['namapasien'];?></option>
<?php
						include "koneksi.php";
						$tampil = mysql_query("select * from pasien where jeniskelamin='Wanita'");
						while($r = mysql_fetch_array($tampil)){
						echo "<option value='$r[norekammedik]'>$r[norekammedik], $r[namapasien]</option>";
						}
						?>
									</select></div>
					</td>
				</tr>
				  	
				<tr>
				
	<td colspan="6" align="center">
				
				<input type="Submit" name="Submit" value="Simpan" />
				<input type="reset" value="Cancel" /> </td>
				</tr>
				</tbody>
				</table>
				</td>
				</tr>
				</table>
				</form>
                  	 <a href="?puskesmas=pasien"><img src="images/back.png" width="50"></a>
                  	 <a onClick="return confirm('Apakah Anda Yakin Untuk Menghapus Data Ini ?')" href="script/delpasientatausaha.php?idpasien=<?php echo $row['idpasien']; ?>"><img src="images/delete.png" width="50"></a>
		 </div>
</body>
</html>
<?
}
?>
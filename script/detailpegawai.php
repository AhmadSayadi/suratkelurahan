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
	$nip = $_POST['nip'];
	$notelppegawai = $_POST['notelppegawai'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$nip = $_POST['nip'];
	$tanggallahir = $_POST['tanggallahir'];
	$noktppegawai = $_POST['noktppegawai'];
	$alamat = $_POST['alamat'];
	$nama = $_POST['nama'];
	$mulaibekerja = $_POST['mulaibekerja'];
	$tempatlahir = $_POST['tempatlahir'];
	$idpegawai = $_GET['idpegawai'];
	$jabatan = $_POST['jabatan'];
	$pangkat = $_POST['pangkat'];
	$pendidikan = $_POST['pendidikan'];
	$status = $_POST['status'];
	
		
$perintah = "update t_ptugas set nip='$nip',notelppegawai='$notelppegawai',jenis_kelamin='$jenis_kelamin',tanggallahir='$tanggallahir',tempatlahir='$tempatlahir',noktppegawai='$noktppegawai',alamat='$alamat',nama='$nama',notelppegawai='$notelppegawai' where idpegawai= '$_GET[idpegawai]'";
				$hasil = mysql_query($perintah);
				if ($hasil) {
				?><script language="JavaScript">alert('Data Disimpan');
				document.location='tatausaha.php?puskesmas=daftarpegawai'</script><?
				}else {
					echo "('sql:'.$perintah.mysql_error())";
				}
	} else {
	$id = $_GET['idpegawai'];
	
$sql = " Select *
		from t_ptugas
		where idpegawai='$id'";
$result = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_array($result);
	?>
	<div align="center" id="leftPango1"><span class="title">DETAIL PEGAWAI</span></div>
<br/>
<div>
	<h2>Detail Pegawai</h2><br>
	<h5> Nip : <?php echo $row['nip']?> <br/>           Nama Pegawai : <u><?php 
	$erik = $row['nama'];
$str = strtoupper($erik);
echo $str;
	?></u>
	<br/>
	Masa Kerja     : 
	<?php
				$tgllahir =$row['mulaibekerja'];
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
                    <td width="30%"><div align="left">Nip</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="30%"><div align="left"><input name="nip" onkeypress="return numbersonly(event, false)" id="nip" size="25" type="text" value="<? echo $row["nip"] ?>"/></div>
					</td>
					  <td width="30%"><div align="left">No Telp</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="30%"><div align="left"><input name="notelppegawai" onkeypress="return numbersonly(event, false)" id="notelppegawai" size="25" type="text" value="<?php echo $row["notelppegawai"] ?>"/></div>
					
					</tr>
					<tr>
					
					<td width="30%"><div align="left">No Ktp Pegawai</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="30%"><div align="left"><input name="noktppegawai" onkeypress="return numbersonly(event, false)" id="noktppegawai" size="25" type="text" value="<?php echo $row["noktppegawai"]; ?>"/></div>
				    <td width="30%"><div align="left">Tempat Lahir</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="30%"><div align="left"><input name="tempatlahir" id="tempatlahir" size="25" type="text" value="<?php echo $row["tempatlahir"] ?>"/></div>
					</td>
				
					</tr>
                <tr>
				    <td width="30%"><div align="left">Nama Pegawai </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="30%"><div align="left"><input name="nama" id="nama" size="25" type="text" value="<? echo $row["nama"] ?>"/></div>
				    <td width="30%"><div align="left">Tanggal Lahir</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="30%"><div align="left"><input name="tanggallahir" id="tanggal" size="15" type="text" value="<?php echo $row["tanggallahir"] ?>"/></div>
					</td>
					
                </tr>
                <tr>
                    <td width="30%"><div align="left">Alamat Pegawai </div></td>
                    <td width="5%"><div align="center">:</div></td> 
                   	<td width="30%"><div align="left"><input name="alamat" id="alamat" size="25" type="text" value="<?php echo $row["alamat"] ?>"/></div></td>
                				</td>
				    <td><div align="left">Jenis Kelamin</div></td>
                    <td><div align="center">:</div></td>
                    <td><div align="left"><select name="jenis_kelamin">
						<? if($row["jenis_kelamin"] == "pria")
						{
						?>			<option value="<? echo $row["jenis_kelamin"] ?>"><? echo $row["jenis_kelamin"] ?></option>
									<option value="Wanita">Wanita</option>
									
									<option value="Pria">Pria</option>
							<?php }else {
						?>			<option value="<? echo $row["jenis_kelamin"] ?>"><? echo $row["jenis_kelamin"] ?></option>
									
									<option value="Pria">Pria</option>
									<option value="Wanita">Wanita</option>
						<?
						}
						?>	
							
						</select></div>
                    </td>
				
				</tr> 
		  	<tr>
					
					<td width="30%"><div align="left">Pangkat</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="30%"><div align="left"><select name="pangkat" placeholder="Pilihlah Pangkat" tabindex="2" required>
		<option value="<?php echo $row['pangkat'];?>"><?php echo $row['pangkat'];?></option>
						<?php
						include "koneksi.php";
						$tampil = mysql_query("select namasetting from setting where jenissetting='Pangkat'");
						while($r = mysql_fetch_array($tampil)){
						echo "<option value=$r[namasetting]>$r[namasetting]</option>";
						}
						?>
					</select></div>
				    <td width="30%"><div align="left">Jabatan</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="30%"><div align="left"><select name="jabatan" placeholder="Pilihlah Jabatan" tabindex="2" required>
		<option value="<?php echo $row['jabatan'];?>"><?php echo $row['jabatan'];?></option>
						<?php
						include "koneksi.php";
						$tampil = mysql_query("select namasetting from setting where jenissetting='Jabatan'");
						while($r = mysql_fetch_array($tampil)){
						echo "<option value=$r[namasetting]>$r[namasetting]</option>";
						}
						?>
					</select></div>
					</td>
				
					</tr>
				 <tr>  <td width="30%"><div align="left">Pendidikan</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="30%"><div align="left"><input name="pendidikan"  size="25" type="text" value="<?php echo $row["pendidikan"] ?>"/></div>
					</td> <td width="30%"><div align="left">Mulai Bekerja</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="30%"><div align="left"><input name="mulaibekerja" id="tanggal1" size="15" type="text" value="<?php echo $row["mulaibekerja"] ?>"/></div>
					</td>
					
                </tr> <tr>  <td width="30%"><div align="left">Status</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="30%"><div align="left"><input name="status"  size="25" type="text" value="<?php echo $row["status"] ?>"/></div>
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
                  	 <a href="?puskesmas=daftarpegawai"><img src="images/back.png" width="50"></a> <a onClick="return confirm('Apakah Anda Yakin Untuk Menghapus Data Ini ?')" href="script/delpegawai.php?idpegawai=<?php echo $_GET['idpegawai']?>"><img src="images/delete.png" width="50"></a>
		 </div>
         
		 

   <!-- End Wrapper -->
</body>
</html>
<?
}
?>
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
	$notelpdokter = $_POST['notelpdokter'];
	$jeniskelamin = $_POST['jeniskelamin'];
	$nip = $_POST['nip'];
	$tanggallahir = $_POST['tanggallahir'];
	$noktpdokter = $_POST['noktpdokter'];
	$alamatdokter = $_POST['alamatdokter'];
	$namadokter = $_POST['namadokter'];
	$tempatlahir = $_POST['tempatlahir'];
	$poli = $_POST['poli'];
	$iddokter = $_GET['iddokter'];
		
$perintah = "update dokter set jeniskelamin='$jeniskelamin',nip='$nip',tanggallahir='$tanggallahir',tempatlahir='$tempatlahir',noktpdokter='$noktpdokter',alamatdokter='$alamatdokter',namadokter='$namadokter',notelpdokter='$notelpdokter',poli='$poli' where iddokter= '$_GET[iddokter]'";
				$hasil = mysql_query($perintah);
				if ($hasil) {
				?><script language="JavaScript">alert('Data Disimpan');
				document.location='tatausaha.php?puskesmas=dokter'</script><?
				}else {
					echo "('sql:'.$perintah.mysql_error())";
				}
	} else {
	$id = $_GET['iddokter'];
	
$sql = " Select *
		from dokter
		where iddokter='$id'";
$result = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_array($result);
	?>
	<div align="center" id="leftPango1"><span class="title">DETAIL DOKTER</span></div>
<br/>
<div>
	<h2>Detail Dokter</h2><br>
	<h5> Nip : <?php echo $row['nip']?> <br/>           Nama Dokter : <u><?php 
	$erik = $row['namadokter'];
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
                    <td width="30%"><div align="left">Nip</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="30%"><div align="left"><input name="nip" onkeypress="return numbersonly(event, false)" id="nip" size="25" type="text" value="<? echo $row["nip"] ?>"/></div>
					</td>
					  <td width="30%"><div align="left">No Telp</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="30%"><div align="left"><input name="notelpdokter" onkeypress="return numbersonly(event, false)" id="notelpdokter" size="25" type="text" value="<?php echo $row["notelpdokter"] ?>"/></div>
					
					</tr>
					<tr>
					
					<td width="30%"><div align="left">No Ktp Dokter</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="30%"><div align="left"><input name="noktpdokter" onkeypress="return numbersonly(event, false)" id="noktpdokter" size="25" type="text" value="<?php echo $row["noktpdokter"]; ?>"/></div>
				    <td width="30%"><div align="left">Tempat Lahir</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="30%"><div align="left"><input name="tempatlahir" id="tempatlahir" size="25" type="text" value="<?php echo $row["tempatlahir"] ?>"/></div>
					</td>
				
					</tr>
                <tr>
				    <td width="30%"><div align="left">Nama Dokter </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="30%"><div align="left"><input name="namadokter" id="namadokter" size="25" type="text" value="<? echo $row["namadokter"] ?>"/></div>
				    <td width="30%"><div align="left">Tanggal Lahir</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="30%"><div align="left"><input name="tanggallahir" id="tanggal" size="15" type="text" value="<?php echo $row["tanggallahir"] ?>"/></div>
					</td>
					
                </tr>
                <tr>
                    <td width="30%"><div align="left">Alamat Dokter </div></td>
                    <td width="5%"><div align="center">:</div></td> 
                   	<td width="30%"><div align="left"><input name="alamatdokter" id="alamatdokter" size="25" type="text" value="<?php echo $row["alamatdokter"] ?>"/></div></td>
                				</td>
				    <td><div align="left">Jenis Kelamin</div></td>
                    <td><div align="center">:</div></td>
                    <td><div align="left"><select name="jeniskelamin">
						<? if($row["jeniskelamin"] == "pria")
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
				
				</tr> 
				  	<tr>
					<td><div align="left">Jenis Dokter</div></td>
                    <td><div align="center">:</div></td>
                    <td><div align="left"><select name="poli">
						<? if($row["poli"] == "Umum")
						{
						?>			<option value="<? echo $row["poli"] ?>"><? echo $row["poli"] ?></option>
									<option value="Gigi">Gigi</option>
									
							<?php }else {
						?>			<option value="<? echo $row["poli"] ?>"><? echo $row["poli"] ?></option>
									
									<option value="Umum">Umum</option>
						<?
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
                  	 <a href="?puskesmas=dokter"><img src="images/back.png" width="50"></a> <a onClick="return confirm('Apakah Anda Yakin Untuk Menghapus Data Ini ?')" href="script/deldokter.php?iddokter=<?php echo $_GET['iddokter']?>"><img src="images/delete.png" width="50"></a>
		 </div>
         
		 

   <!-- End Wrapper -->
</body>
</html>
<?
}
?>
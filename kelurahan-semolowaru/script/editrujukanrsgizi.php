<html>

<?
include "koneksi.php";

	?>


<body>


		 <div id="rightcolumn">
		
			<?php
	$id = $_GET['idrujukan'];
$sql = " Select *
		from rujukan
		where idrujukan='$id'";
$result = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_array($result);
	?>
	<center>
 <div align="center" id="leftPango1"><span class="title">EDIT RUJUKAN RUMAH SAKIT GIZI</span></div>
</center>
 <br/>
                  <h2>Edit Rujukan Rumah Sakit Gizi</h2>
	
				<form id="form1" name="form1" method="post" action="script/updaterujukanrsgizi.php?idantrian=<?php echo $_GET['idantrian'];?>&idrujukan=<?php echo $_GET['idrujukan']?>">         
 <table width="80%" border="0" cellpadding="2" cellspacing="2">
            <tr>
            
            </tr>
            <tr>
              <td><table align="left" border="0" cellpadding="0" cellspacing="5">
			  <tbody>
<?php

$sqll = " Select norekammedik
		from antrian
		where idantrian='$_GET[idantrian]'";
$resultl = mysql_query($sqll) or die(mysql_error());
$rowl = mysql_fetch_array($resultl);

$sqlw = " Select *
		from pasien
		where norekammedik='$rowl[norekammedik]'";
$resultw = mysql_query($sqlw) or die(mysql_error());
$roww = mysql_fetch_array($resultw);

?>
			  <tr>
				  <td width="5%"><div align="center">1</div></td>
                    <td width="30%"><div align="left">Nama </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   
                   	<td width="50%"><div align="left"><input name="nama" id="nama" size="30" readonly='true' type="text" value="<? echo $roww["namapasien"] ?>"/></div></td>
                  
                </tr><tr>
				  <td width="5%"><div align="center">2</div></td>
                    <td width="30%"><div align="left">Alamat </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   
                   	<td width="50%"><div align="left"><input name="no" id="no" size="30" readonly='true' type="text" value="<?=$roww["alamatpasien"] ?>"/></div></td>
                  
                </tr>
				<tr valign="top">
                    <td width="5%"><div align="center">2</div></td>
                    <td width="30%"><div align="left">Nama Rumah Sakit</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><textarea name="diagnosaawal" id="diagnosaawal" size="25" type="text" ><?php echo $row['diagnosaawal'] ?></textarea></div>
					</td>
				</tr><tr valign="top">
                    <td width="5%"><div align="center">2</div></td>
                    <td width="30%"><div align="left">Alamat Rumah Sakit</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><textarea name="alamat" id="alamat" size="25" type="text" ><?php echo $row['alamat'] ?></textarea></div>
					</td>
				</tr><tr valign="top">
                    <td width="5%"><div align="center">2</div></td>
                    <td width="30%"><div align="left">Diagnosa Awal</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><textarea name="diagnosaakhir" id="diagnosaakhir" size="25" type="text" ><?php echo $row['diagnosaakhir'] ?></textarea></div>
					</td>
				</tr>
                <tr>
                    <td width="5%"><div align="center">3</div></td>
                    <td width="30%"><div align="left">Status</div> </td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><select name="status">
									<option value="<?php echo $row['status']?>"><?php echo $row['status']?></option>
									<option value="Belum">Belum</option>
									<option value="Sudah">Sudah</option>
									</div>
									</select></td>
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
</body>
</html>

<html>

<?
include "koneksi.php";

	?>


<body>


		 <div id="rightcolumn">
		
			<?php
	$id = $_GET['idpelayanan'];
$sql = " Select *
		from pelayanan
		where idpelayanan='$id'";
$result = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_array($result);
	?>
	<center>
 <div align="center" id="leftPango1"><span class="title">EDIT PELAYANAN KELUARGA BERENCANA</span></div>
</center>
 <br/>
                  <h2>Edit Pelayanan Keluarga Berencana</h2>
	
				<form id="form1" name="form1" method="post" action="script/updatepelayanankbkia.php?idpelayanan=<?php echo $_GET['idpelayanan'];?>&idantrian=<?php echo $row['idantrian']?>">         
 <table width="80%" border="0" cellpadding="2" cellspacing="2">
            <tr>
            
            </tr>
            <tr>
              <td><table align="left" border="0" cellpadding="0" cellspacing="5">
			  <tbody>
<?php

$sqll = " Select norekammedik
		from pelayanan
		where idpelayanan='$_GET[idpelayanan]'";
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
                   
                   	<td width="50%"><div align="left"><input name="nama" id="nama" size="25" readonly='true' type="text" value="<? echo $roww["namapasien"] ?>"/></div></td>
                  
                </tr><tr>
				  <td width="5%"><div align="center">2</div></td>
                    <td width="30%"><div align="left">Alamat </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   
                   	<td width="50%"><div align="left"><input name="no" id="no" size="25" readonly='true' type="text" value="<?=$roww["alamatpasien"] ?>"/></div></td>
                  
                </tr>
				<tr>
                    <td width="5%"><div align="center">2</div></td>
                    <td width="30%"><div align="left">Pelayanan</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><textarea name="diagnosaawal" id="diagnosaawal" size="25" type="text" ><?php echo $row['keterangan'] ?></textarea></div>
					</td>
				</tr>
                <tr>
                    <td width="5%"><div align="center">3</div></td>
                    <td width="30%"><div align="left">Tanggal</div> </td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input type="text" readonly="true" value="<?php echo $row['tanggal']?>"></td>
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

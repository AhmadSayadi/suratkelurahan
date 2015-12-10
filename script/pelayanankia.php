<html>
<head>


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
	</head>

<body>  <div align="center" id="leftPango1"><span class="title">PELAYANAN IBU DAN ANAK</span></div>
<?
include "koneksi.php";
$id = $_GET['idantrian'];
$sql = " Select * from antrian where idantrian='$id'";

$result = mysql_query($sql) or die(mysql_error());

$row = mysql_fetch_array($result);

$sqll = " Select * from pasien where norekammedik='$row[norekammedik]'";
$result1 = mysql_query($sqll);
$row1 = mysql_fetch_array($result1);
?>	
<form id="form1" name="form1" method="post" action="script/updatepelayanankia.php?idantrian=<?php echo $row['idantrian'];?>">         
 <table width="100%" border="0" cellpadding="2" cellspacing="2">

            <tr>
              <td><table align="left" border="0" cellpadding="0" cellspacing="5">
			  <tbody>
			  <tr><td colspan="4"><h2>Pelayanan Ibu Dan Anak </h2></td></tr>
			  
			  <tr>
                    <td width="5%"><div align="center">1</div></td>
                    <td width="30%"><div align="left">Nomor Rekam Medik</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="norekammedik" value="<?php echo $row['norekammedik'];?>" readonly="true" onkeypress="return numbersonly(event, false)" title="Masukkan Nomor Rekam Medik"  size="50" placeholder="Masukkan Nomor Rekam Medik" size="25" type="text" required /></div>
					</td>
                <tr>
				  <td width="5%"><div align="center">2</div></td>
                    <td width="30%"><div align="left">Nama Pasien</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   
                   	<td width="50%"><div align="left"><input name="namapasien"  title="Masukkan Nama Pasien"  size="50" readonly="true" value="<?php echo $row1['namapasien']?>" placeholder="Masukkan Nama Pasien"  type="text" required /></div></td>
                  
                </tr>
                <tr>
                    <td width="5%"><div align="center">3</div></td>
                    <td width="30%"><div align="left">Alamat Pasien</td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="alamatpasien" title="Masukkan Alamat Pasien"  size="50" readonly="true" placeholder="Masukkan Alamat Pasien" value="<?php echo $row1['alamatpasien']?>" type="text" required /></div>
					</td>
				</tr>
	
                  <tr>
                    <td width="5%"><div align="center">4</div></td>
                    <td width="30%"><div align="left">Poli </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="poli" value="<?php echo $row['poli'];?>"  readonly="true" title="Masukkan Poli"  size="50" placeholder="Masukkan No Ktp Pasien" size="25" type="text" /></div>
					</td>
				</tr>
				<tr>
                    <td width="5%"><div align="center">5</div></td>
                    <td width="30%"><div align="left">Status</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="status" readonly="true" title="Masukkan Status"  value="<?php echo $row['status'];?>" placeholder="Masukkan Status" size="50" required/></div>
					</td>
				</tr><tr>
                    <td width="5%"><div align="center">6</div></td>
                    <td width="30%"><div align="left">Tanggal Kunjungan</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="tanggalkunjungan" readonly="true" value="<?php 
							echo $row['tanggalkunjungan'];?>" title="Masukkan Tanggal Kunjungan" id="tanggal" value="<?php echo date("Y-m-d");?>" placeholder="Masukkan Tanggal Tunjungan" size="10" required/></div>
					</td>
				</tr>
			<tr valign="top">
                    <td width="5%"><div align="center">7</div></td>
                    <td width="30%"><div align="left">Keterangan Periksa</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td  width="50%"><div align="left"><textarea style="width : 330px; height : 100px;" title="Masukkan Keterangan Sakit"  placeholder="Masukkan Keterangan Sakit" name="keterangan"  size="50" type="text"><?php echo $row['keterangan']?></textarea></div>
					</td>
				</tr>
				<tr>
				<th colspan="2" scope="row">&nbsp;</th>
	<td><div align="center"></div></td>
				<td><div align="left">
				<input type="Submit" name="Submit" value="Simpan" />
				<input type="reset" value="Cancel" />
				
				</div></td>
				</tr>
				</tbody>
				</table>
				</td>
				</tr>
				<tr><td colspan="4" align="left"><a target="_BLANK" onClick="return confirm('Apakah Anda Yakin Untuk Melihat Detail Data Ini ?')" href="script/rujukanpolikia.php?idantrian=<?php echo $row['idantrian']?>&norekammedik=<?php echo $row['norekammedik']?>"><img width="35" src="images/report.png">Report Pelayanan</a></td></tr>
		  
				</table>
				</form>
				<?php include "menupelayanankia.php";?><br/>
				<?php include "contentpelayanankia.php";?>
				<?php include "menurujukankia.php";?><br/>
				<?php include "contentrujukan.php";?>
</body>
</html>

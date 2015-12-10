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

<body>  <div align="center" id="leftPango1"><span class="title">FORM PASIEN BARU</span></div>
<form id="form1" name="form1" method="post" action="script/simpanpasien.php">         
 <table width="80%" border="0" cellpadding="2" cellspacing="2">

            <tr>
              <td><table align="left" border="0" cellpadding="0" cellspacing="5">
			  <tbody>
			
			  <tr><td colspan="4"><br/><h2>Form Pasien Baru</h2></td></tr>
			
			<tr valign="top">
                    <td width="5%"><div align="center">1</div></td>
                    <td width="30%"><div align="left">Nomor Rekam Medik</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="norekammedik" onkeypress="return numbersonly(event, false)" title="Masukkan Nomor Rekam Medik"  size="50" placeholder="Masukkan Nomor Rekam Medik" size="25" type="text" required /></div>
					</td>
                <tr>
				  <td width="5%"><div align="center">2</div></td>
                    <td width="30%"><div align="left">Nama Pasien</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   
                   	<td width="50%"><div align="left"><input name="namapasien" title="Masukkan Nama Pasien"  size="50" placeholder="Masukkan Nama Pasien"  type="text" required /></div></td>
                  
                </tr>
                <tr>
                    <td width="5%"><div align="center">3</div></td>
                    <td width="30%"><div align="left">Alamat Pasien</td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="alamatpasien" title="Masukkan Alamat Pasien"  size="50" placeholder="Masukkan Alamat Pasien"  type="text" required /></div>
					</td>
				</tr>
				<tr valign="top">
                    <td><div align="center">4</div></td>
                    <td><div align="left">Jenis Kelamin </div></td>
                    <td><div align="center">:</div></td>
                    <td><div align="left"><select name="jeniskelamin" required>
									<option value="">Jenis Kelamin</option>
									<option value="Pria">Pria</option>
									<option value="Wanita">Wanita</option>
									</select></div>
                    </td>
				  </tr>
                  <tr>
                    <td width="5%"><div align="center">5</div></td>
                    <td width="30%"><div align="left">No Ktp Pasien </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="noktppasien" onkeypress="return numbersonly(event, false)" title="Masukkan No Ktp Pasien"  size="50" placeholder="Masukkan No Ktp Pasien" size="25" type="text" /></div>
					</td>
				</tr>
				<tr>
                    <td width="5%"><div align="center">6</div></td>
                    <td width="30%"><div align="left">Tempat Lahir</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="tempatlahir" title="Masukkan Tempat Lahir"   placeholder="Masukkan Tempat Lahir" size="50" required/></div>
					</td>
				</tr><tr>
                    <td width="5%"><div align="center">7</div></td>
                    <td width="30%"><div align="left">Tanggal Lahir</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="tanggallahir" title="Masukkan Tanggal Lahir" id="tanggal" value="<?php echo date("Y-m-d");?>" placeholder="Masukkan Tanggal Lahir" size="20" required/></div>
					</td>
				</tr>
				<tr>
                    <td width="5%"><div align="center">8</div></td>
                    <td width="30%"><div align="left">Nomor Telp</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input title="Masukkan Nomor Telp" onkeypress="return numbersonly(event, false)"  size="50" placeholder="Masukkan Nomor Telp" name="notelppasien"  size="25" type="text" /></div>
					</td>
				</tr><tr>
                    <td width="5%"><div align="center">9</div></td>
                    <td width="30%"><div align="left">Nama KK</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input title="Masukkan Nama KK"  placeholder="Masukkan Nama KK" name="kk"  size="50" type="text" /></div>
					</td>
				</tr><tr valign="top">
                    <td><div align="center">10</div></td>
                    <td><div align="left">Nama Ibu</div></td>
                    <td><div align="center">:</div></td>
                    <td><div align="left"><select name="namaibu">
									<option value="">Pilih Nama Ibu</option>
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
				</table>
				</form>
</body>
</html>

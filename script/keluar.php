<html>
<?php include "koneksi.php";?>
<script type="text/javascript">
		var objAjax1;
		function getData(nama_obat){
		objAjax1=buatajax();
			url1="script/getDb1.php";
			url1=url1+"?q="+nama_obat;
			url1=url1+"&sid"+Math.random;
			objAjax1.onreadystatechange=stateChange;
			objAjax1.open("GET", url1, true);
			objAjax1.send(null);
		}
		function buatajax(){
			if(window.XMLHttpRequest){
				return new XMLHttpRequest();
			}
			if(window.ActiveXObject){
				return new ActiveXObject
				("Microsoft.XMLHTTP");
			}
			return null;
		}
				function stateChange(){
			var data;
			if(objAjax1.readyState==4){
				data=objAjax1.responseText;
				if(data.length>0){
					document.getElementById ("nama_obat").value=data;
				}
				else{
					document.getElementById ("nama_obat").value="";
				}
			}
		}
			
		</script><SCRIPT LANGUAGE="JavaScript">
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
<head>

<link rel="stylesheet" type="text/css" href="../style.css" /><link rel="shortcut icon" type="image/x-icon" href="../image/favicon.ico">
</head>

<?
if(isset($_POST['Submit'])) {
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$jumlah = $_POST['jumlah'];
	$satuan = $_POST['satuan'];
	$tgl = $_POST['tgl'];
		
$perintah = "INSERT INTO obat_keluar VALUES ('','$id','$nama','$jumlah','$tgl')";
				$hasil = mysql_query($perintah);
				$stock1=mysql_fetch_array(mysql_query("SELECT jumlah FROM obat WHERE id_obat = '$id' ")); 
$harga1=$stock1[0];
$harga2=$harga1 - $jumlah;
$update3 = mysql_query("UPDATE obat SET jumlah = '$harga2' WHERE id_obat = '$id'");

				if($hasil){
?>
<script> alert("Data Telah Tersimpan");</script>
<script>document.location.href="apotik.php?puskesmas=daftarobatkeluar" </script>
<?php
}else{
?><script> alert("Data Tidak Tersimpan");</script>
<script>document.location.href="apotik.php?puskesmas=daftarobatkeluar" </script>
<?php
}
	} else {
	?>


<body>


		 <div id="rightcolumn"><div align="center" id="leftPango1"><span class="title">DAFTAR OBAT KELUAR</span></div>
			<br/> <h2>Daftar Obat Keluar</h2><br/>
			<form id="form1" name="form1" method="post" action="">         
 <table width="80%" border="0" cellpadding="2" cellspacing="2">
            <tr>
            
            </tr>
            <tr>
              <td><table align="left" border="0" cellpadding="0" cellspacing="5">
			  <tbody>
			  		<tr>
                    <td width="5%"><div align="center">1</div></td>
                    <td width="30%"><div align="left">ID </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><select onchange="getData(this.value)" name="id" required>
						<option value="">- Pilihlah Nama Obat-</option>
						<?php
						include "../koneksi.php";
						$tampil = mysql_query("select * from obat");
						while($r = mysql_fetch_array($tampil)){
								
						echo "<option value='$r[id_obat]'>$r[id_obat],$r[nama_obat] </option>";
						}
						?>
					</select></div>
					</td>
				</tr>
                <tr>
				  <td width="5%"><div align="center">2</div></td>
                    <td width="30%"><div align="left">Nama Obat </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   
                   	<td width="50%"><div align="left"><input name="nama" id="nama_obat" readonly="true" size="25" type="text" value="<? echo $nama ?>"/></div></td>
                  
                </tr>
				<tr valign="top">
                    <td><div align="center">3</div></td>
                    <td><div align="left">Jumlah Obat</div></td>
                    <td><div align="center">:</div></td>
                    <td><div align="left"><input name="jumlah" size="25" type="text" id="jumlah" value="<? echo $jumlah ?>" /></div>
					</td>
				</tr>
				  <tr valign="top">
                    <td><div align="center">4</div></td>
                    <td><div align="left">TGL Keluar </div></td>
                    <td><div align="center">:</div></td>
                    <td><div align="left"><input name="tgl" readonly="true" size="25" value="<?php echo date("Y-m-d");?>" type="text" id="tgl"  /></div>
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
				<?php
		} 
		?>                 	 
			 
         </div>
		 
   </div>
</body>
</html>
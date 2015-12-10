


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

<script type="text/javascript">
		var objAjax1;
		function getData(namasetting){
		objAjax1=buatajax();
			url1="script/getpoli.php";
			url1=url1+"?q="+namasetting;
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
					document.getElementById ("keterangan").value=data;
				}
				else{
					document.getElementById ("keterangan").value="";
				}
			}
		}
			
		</script>	

 <div align="center" id="leftPango1"><span class="title">LABORATORIUM</span></div>
<br/><div>
 <h2>Data Pasien</h2>
 		 	<?php
			include "koneksi.php";
			$id = $_GET['idpasien'];
	
$sql = " Select *
		from pasien
		where idpasien='$id'";
$result = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_array($result);
	?>
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
	
 <table width="80%" border="0" cellpadding="2" cellspacing="2">
            <tr>
              <td><table align="left" border="0" cellpadding="0" cellspacing="5">
			  <tbody>
			 
			   <tr>
                    <td width="20%"><div align="left">No Ktp Pasien</div> </td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="20%"><div align="left"><?php echo $row["noktppasien"]; ?></div>
				    <td width="20%"><div align="left">Alamat Pasien </div></td>
                    <td width="5%"><div align="center">:</div></td> 
                   	<td width="30%"><div align="left"><?php echo $row["alamatpasien"] ?></div></td>
                				</td>
				   
					</tr>
					<tr>
					
					  <td width="20%"><div align="left">No Telp</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="20%"><div align="left"><?php echo $row["notelppasien"] ?></div>
					
					 <td width="20%"><div align="left">Tempat Lahir</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="20%"><div align="left"><?php echo $row["tempatlahir"] ?></div>
					</td>
				
					</tr>
                <tr>
				    <td><div align="left">Jenis Kelamin</div></td>
                    <td><div align="center">:</div></td>
                    <td><div align="left">
						<? echo $row["jeniskelamin"] ?></div>
                    </td>
				 <td width="20%"><div align="left">Tanggal Lahir</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="20%"><div align="left"><?php 
$bulan_long=array('Januari','Februari','Maret','April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'Nopember', 'Desember');
$tgl_temp2=explode("-",$row['tanggallahir']); 
$tgl2=$tgl_temp2[2];
$bln2=$bulan_long[$tgl_temp2[1]-1]; 
$thn2=$tgl_temp2[0]; 					
echo $tgl2 ; echo " "; echo $bln2; echo " ";echo $thn2;

?></div>
					</td>
					
                </tr>
             <tr>
                    <td width="20%"><div align="left">KK  </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="20%"><div align="left"><? echo $row["kk"] ?></div>
					</td>
				</tr>
				  	
				</tbody>
				</table>
				</td>
				</tr>
				</table>
				</form>
         </div>
       
   
         
		


 
   
   
   

	<div align="center" id="leftPango1"><span class="title">Form Kunjungan Laboratorium</span></div>
<br/><div>
	<h2>Form Kunjungan Laboratorium</h2><br>
		<form id="form1" name="form1" method="post" onSubmit="return validasi(this)" action="script/simpanantrianlab.php?norekammedik=<?php echo $row['norekammedik']?>">         
 <table width="70%" border="0" cellpadding="2" cellspacing="2">
            <tr>
              <td><table align="left" border="0" cellpadding="0" cellspacing="5">
			  <tbody>
			 
			    <tr>
				    <td width="30%"><div align="left">Tanggal Kunjungan</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="30%"><div align="left"><input name="tanggalkunjungan" id="tanggal" size="15" type="text" value="<?php echo date("Y-m-d");?>"/></div>
					</td>
					
                </tr>
                 <tr>
                    <td><div align="left">Status</div></td>
                    <td><div align="center">:</div></td>
                    <td><div align="left"><select name="status" onchange="getData(this.value)" required>
									<option value="">-Pilih Status-</option>
						<?php
						include "koneksi.php";
						$tampilf = mysql_query("select namasetting from setting where jenissetting='Status'");
						while($rf = mysql_fetch_array($tampilf)){
						echo "<option value=$rf[namasetting]>$rf[namasetting]</option>";
						}
						?></select></div>
                    </td>
				
				</tr>  <tr>
                    <td width="30%"><div align="left">Biaya  </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="30%"><div align="left"><input value="0"name="keterangan" id="keterangan" readonly="true" size="25" value="<? echo $row["biaya"] ?>"/></div>
					</td>
				</tr><tr>
                    <td width="30%"><div align="left">Dokter</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="30%"><div align="left"> <select name="nip" required>
						<option value="">- Pilihlah Dokter -</option>
						<?php
						include "koneksi.php";
						$tampil = mysql_query("select * from dokter");
						while($r = mysql_fetch_array($tampil)){
						echo "<option value=$r[nip]>$r[nip], $r[namadokter]</option>";
						}
						?>
					</select></a></div>
					</td>
				</tr><tr>
                    <td width="30%"><div align="left">Poli  </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="30%"><div align="left"><input name="poli" readonly="true" id="poli" size="25" value="Laboratorium"/></div>
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
                  	 	 </div>
         
		 

</body>
</html>                             
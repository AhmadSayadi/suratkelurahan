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
      </SCRIPT><script type="text/javascript">
		var objAjax1;
		function getData(keterangan){
		objAjax1=buatajax();
			url1="script/getgigi.php";
			url1=url1+"?q="+keterangan;
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
	</head>

<body>  <div align="center" id="leftPango1"><span class="title">FORM PELAYANAN AMBULANCE</span></div>
<form id="form1" name="form1" method="post" action="script/simpanpelayananambulance.php?idantrian=<?php echo $_GET['idantrian']?>&norekammedik=<?php echo $row['norekammedik'];?>">         
 <table width="100%" border="0" cellpadding="2" cellspacing="2">

            <tr>
              <td><table align="left" border="0" cellpadding="0" cellspacing="5">
			  <tbody>
			  <tr><td colspan="4"><br/><h2>Form Pelayanan Ambulance</h2></td></tr>
			   <tr>
                    <td width="5%"><div align="center">1</div></td>
                    <td width="30%"><div align="left">Pelayanan</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left">
					<select onchange="getData(this.value)" name="namasetting" required>
						<option value="">- Pilihlah Pelayanan-</option>
						<?php
						include "koneksi.php";
						$tampil = mysql_query("select * from setting where jenissetting='Ambulance'");
						while($r = mysql_fetch_array($tampil)){
								
						echo "<option value='$r[idsetting]'>$r[namasetting]</option>";
						}
						?>
					</select>
					</div>
					</td>
                </tr>
                <tr>
				  <td width="5%"><div align="center">2</div></td>
                    <td width="30%"><div align="left">Biaya</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   
                   	<td width="50%"><div align="left"><input name="keterangan" id="keterangan" onkeypress="return numbersonly(event, false)" title="Masukkan Biaya Periksa"  size="30" placeholder="Masukkan Biaya Periksa" value="0" type="text" required /></div></td>
                  
                </tr>
<tr>
                    <td width="5%"><div align="center">3</div></td>
                    <td width="30%"><div align="left">Keterangan</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left">
					<textarea type="text" name="nip" placeholder="Masukkan Keterangan" required></textarea>
					</div>
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

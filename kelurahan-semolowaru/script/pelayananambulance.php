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
			
		</script>
	</head>

<body>  <div align="center" id="leftPango1"><span class="title">PELAYANAN AMBULANCE</span></div>
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
<form id="form1" name="form1" method="post" action="script/updatepelayananlab.php?idantrian=<?php echo $row['idantrian'];?>">         
 <table width="100%" border="0" cellpadding="2" cellspacing="2">

            <tr>
              <td><table align="left" border="0" cellpadding="0" cellspacing="5">
			  <tbody>
			  <tr><td colspan="4"><br/><h2>Pelayanan Ambulance</h2></td></tr>
		  
			  <tr>
                    <td width="5%"><div align="center">1</div></td>
                    <td width="30%"><div align="left">Nomor Rekam Medik</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><?php echo $row['norekammedik'];?></div>
					</td>
                <tr>
				  <td width="5%"><div align="center">2</div></td>
                    <td width="30%"><div align="left">Nama Pasien</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   
                   	<td width="50%"><div align="left"><?php echo $row1['namapasien']?></div></td>
                  
                </tr>
                <tr>
                    <td width="5%"><div align="center">3</div></td>
                    <td width="30%"><div align="left">Alamat Pasien</td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><?php echo $row1['alamatpasien']?></div>
					</td>
				</tr>
	
                  <tr>
                    <td width="5%"><div align="center">4</div></td>
                    <td width="30%"><div align="left">Poli </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><?php echo $row['poli'];?></div>
					</td>
				</tr>
				<tr>
                    <td width="5%"><div align="center">5</div></td>
                    <td width="30%"><div align="left">Status</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><?php echo $row['status'];?></div>
					</td>
				</tr><tr>
                    <td width="5%"><div align="center">6</div></td>
                    <td width="30%"><div align="left">Tanggal Kunjungan</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><?php 
							include "koneksi.php";
			$bulan_long=array('Januari','Februari','Maret','April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'Nopember', 'Desember');
					
		
			$tgl_temp1=explode("-",$row['tanggalkunjungan']); 
						$tgl1=$tgl_temp1[2];
						$bln1=$bulan_long[$tgl_temp1[1]-1]; 
						$thn1=$tgl_temp1[0]; 		
							
							echo " "; echo $tgl1 ; echo " "; echo $bln1; echo " ";echo $thn1;echo " ";?></div>
					</td>
				</tr>
		<tr><td colspan="4" align="left"><a target="_BLANK" href="script/rekammedikrujukanpoliambulance.php?idantrian=<?php echo $row['idantrian']?>&norekammedik=<?php echo $row['norekammedik']?>"><img src="images/report.png" width="35">Report Pelayanan</a></td>
           </tr>                 
			
				</tbody>
				</table>
				</td>
				</tr>
				</table>
				</form><?php include "formpelayananambulance.php";?><br/>
				<?php include "daftarpelayananambulance.php";?>
				
</body>
</html>

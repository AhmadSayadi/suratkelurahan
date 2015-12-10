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
session_start();
$id=$_SESSION['level'];
	
	
$sql = " Select *
		from tabel_admin
		where level='$id'";
if(isset($_POST['Submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	
		
$perintah="update tabel_admin set username='$username', password='$password' where level='$id'";

				$hasil = mysql_query($perintah);
				if ($hasil) {
				?><script language="JavaScript">alert('Data Disimpan');
				document.location='umum.php?puskesmas=akunumum'</script><?
				}else {
					echo "('sql:'.$perintah.mysql_error())";
				}
	} else {
	
$id=$_SESSION['level'];
	
	
$sql = " Select *
		from tabel_admin
		where level='$id'";
$result = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_array($result);
	?>
	<div align="center" id="leftPango1"><span class="title">AKUN UMUM</span></div>
<br/>
<div>
	<h2>Akun Umum</h2><br>
	
	</h5>
	<form id="form1" name="form1" method="post" action="">         
 <table width="60%" border="0" cellpadding="2" cellspacing="2">
            <tr>
              <td><table align="left" border="0" cellpadding="0" cellspacing="5">
			  <tbody>
			 
			   <tr>
                    <td width="30%"><div align="left">Username</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="30%"><div align="left"><input name="username" placeholder="Masukkan Username"  id="username" size="25" type="text" value="<? echo $row["username"] ?>" required/></div>
					</td>
					 
					</tr>
					<tr>
					
					<td width="30%"><div align="left">Password</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="30%"><div align="left"><input name="password" placeholder="Masukkan Password"  id="password" size="25" type="text" value="<?php echo $row["password"]; ?>" required/></div>
				   
				
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
         
		 

   <!-- End Wrapper -->
</body>
</html>
<?
}
?>
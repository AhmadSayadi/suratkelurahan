<html><link type="text/css" href="development-bundle/themes/base/ui.all.css" rel="stylesheet" />   

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
    </script>  <script type="text/javascript"> 
      $(document).ready(function(){
        $("#tanggal2").datepicker({
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
    </script>  <script type="text/javascript"> 
      $(document).ready(function(){
        $("#tanggal3").datepicker({
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
    </script>
<body>

 <div align="center" id="leftPango1"><span class="title">REPORT REGISTRASI</span></div>
	<h2><font face="FrankRuehl" >Report Registrasi</font></h2>

	<form method="POST" target="_BLANK" action="script/cetakdatabayar.php">
<table width="100%" align="center">
	<tr align="center"><td colspan="3" align="center"><h4>Masukkan Keyword</h4></tr>
	<tr>
	<td>Tanggal <br/><input type="text" value="<?php echo date("Y-m-d");?>" id="tanggal" name="tanggal" required></td>
	<td>Sampai <br/><input type="text" value="<?php echo date("Y-m-d");?>" id="tanggal3" name="tanggal1" required></td>
	<td> <label><b>Jenis Status</b></label><br />
	  <select name="status"  style="width : 265px; height : 20px;" placeholder="status" tabindex="2" required>
		<option value="">--Pilih Status--</option>
			<option value="-">All</option>
			<option value="Askes">Askes</option>
			<option value="JSP">JSP</option>
			<option value="Bayar">Bayar</option>
		</select></td>
	</tr>
	
	<tr>
	<td align="center" colspan="3"><input type="submit" name="" value="Cetak Report">
	<input type="reset" name="" value="Cancel"></td>
	</tr>
	
</table>
</form>
<table  width="100%">
				<tr align="center">
				
				<td width="900px"></td>
				<td width="200px">
<a href="?puskesmas=bayar" ><img title="Form Registrasi" src="images/report.png" width="50"><br/>Form Registrasi</a>
</td><td width="200px">
<a href="?puskesmas=daftarpembayaran" ><img title="Daftar Registrasi" src="images/url.png" width="50"><br/>Daftar Registrasi</a>
</td>
<td width="10px"></td>
</tr>		
		</table>
<br/></body>
</html>
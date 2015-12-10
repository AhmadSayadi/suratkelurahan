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
    </script> 
	</head>
<body>

 <div align="center" id="leftPango1"><span class="title">REPORT OBAT KELUAR</span></div>
	<br/><h2><font face="FrankRuehl" >Report Obat Keluar</font></h2>

	<form method="POST" target="_BLANK" action="script/cetakdatakeluar.php">
<table>
	<tr><td colspan="3" align="center"><h4>Masukkan Keyword</h4></tr>
	<tr>
	<td>Tanggal <br/><input type="text" value="<?php echo date("Y-m-d");?>" id="tanggal" name="tanggal" required></td>
	<td>Sampai <br/><input type="text" value="<?php echo date("Y-m-d");?>" id="tanggal1" name="tanggal1" required></td>
	
	</tr>
	
	<tr>
	<td align="center" colspan="3"><input type="submit" name="" value="Cetak Report">
	<input type="reset" name="" value="Cancel"></td>
	</tr>
	
</table>
</form>
</body>
</html>
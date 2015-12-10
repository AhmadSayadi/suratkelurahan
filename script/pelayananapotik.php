<?php
include "koneksi.php";

   $waktu3=date("Y-m-d");

?>
<!DOCTYPE html>
<html>
    <head>
      
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        

        
    </head>
    <body >
	
	<div><center>
 <div align="center" id="leftPango1"><span class="title">PELAYANAN OBAT RUJUKAN DARI POLI</span></div>
</center><br/>
 <font color="blue" ><h2>Pelayanan Obat Rujukan Dari Poli</h2></font>


	</div>
	
     
			
		 		 	<?php

			$id = $_GET['idrujukan'];
	
$sqls = "Select *
		from rujukan
		where idrujukan='$id'";
$results = mysql_query($sqls);
$rows = mysql_fetch_array($results);
//echo $rows['idantrian'];	
$sqlss = "Select *
		from antrian
		where idantrian='$rows[idantrian]'";
$resultss = mysql_query($sqlss);
$rowss = mysql_fetch_array($resultss);

$sql = " Select *
		from pasien
		where norekammedik='$rowss[norekammedik]'";
$result = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_array($result);
	?>
	<h4> No Rekam Medik : <?php echo $rowss['norekammedik']?> <br/>           Nama Pasien : <u><?php 
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
	
	</h4>
	<div>
 <table width="100%" border="0" cellpadding="2" cellspacing="2">
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
					
					</td>
				
					
				    <td><div align="left">Jenis Kelamin</div></td>
                    <td><div align="center">:</div></td>
                    <td><div align="left">
						<? echo $row["jeniskelamin"] ?></div>
                    </td>
				 	
                </tr>
        
				  	
				</tbody>
				</table>
				</td>
				</tr>
				</table>
				</form>
				
				<b>Obat Yang Disarankan :</b><br/>
				<?php echo $rows['diagnosaawal'];	?>
<br/>
<br/>
         <?php include "daftarobatdipesan.php"?>
      
		

</div>
 </body>
</html>

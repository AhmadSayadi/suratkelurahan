<?php
include "koneksi.php";

   $waktu3=date("Y-m-d");
$result = mysql_query("SELECT * FROM pasien");
?>
<!DOCTYPE html>
<html>
    <head>
      
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        

        
    </head>
    <body >
	
	<div><center>
 <div align="center" id="leftPango1"><span class="title">REKAM MEDIK PASIEN POLI PARU & KUSTA</span></div>
</center><br/>
 <font color="blue" ><h2>Rekam Medik Pasien Poli Paru & Kusta</h2></font>


	</div>
	
     
			
		 		 	<?php
			include "koneksi.php";
			$id = $_GET['norekammedik'];
	
$sql = " Select *
		from pasien
		where norekammedik='$id'";
$result = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_array($result);
	?>
	<h4> No Rekam Medik : <?php echo $row['norekammedik']?> <br/>           Nama Pasien : <u><?php 
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
				

         <?php include "daftarrekammedikparukusta.php"?>
      
		

</div>
 </body>
</html>

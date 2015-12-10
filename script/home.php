<div align="center" id="leftPango1"><span class="title">HOMEPAGE</span></div>
		<br/> 
<?php include "galeri.php";?>
		<br/> 
		<center><?php
include "koneksi.php";
$sql = mysql_query("SELECT * FROM setting where jenissetting='sambutan'");

while($row = mysql_fetch_array($sql)){

?>

<table style="text-align:justify;width:100%; background-color:#f0f0f0; border:1px solid #000099; padding:8px;" width="100%" border="0" cellspacing="1" cellpadding="2">

   <tr>
    <td width="450" ><b><h2>Sambutan Kepala Kelurahan Semolowaru</h2></b></td>
  </tr>
  <tr>
  <td  align="right">Bangkalan, <? 
  $waktu='2015-05-08';
  $bulan_long=array('Januari','Februari','Maret','April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'Nopember', 'Desember');
								$tgl_temp=explode("-",$waktu); 
						$tgl=$tgl_temp[2];
						$bln=$bulan_long[$tgl_temp[1]-1]; 
						$thn=$tgl_temp[0]; 		
						echo " "; echo $tgl ; echo " "; echo $bln; echo " ";echo $thn;echo " "; ?></td>
      </tr>
 
 <tr>
 
    <td width="450" align="center" ><a href="images/monitor_icon.png" class="pirobox"><p align="justify" ><img  style="float:left; margin:0 8px 4px 0;" width="125" height="150" src="images/monitor_icon.png"></a><?php echo substr($row[2],0,300)?><br/><a href="index.php?kelurahan=sambutan"><br/><font color='blue'>Read More . . .</font></a></p></td>
  </tr>

 
</table>
<?php
}
?>
</center>
	
<?php include "berita2.php";?>		
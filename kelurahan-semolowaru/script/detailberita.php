
		 <div id="rightcolumn">
		 <div align="center" id="leftPango1"><span class="title">BERITA</span></div>
<br/>
	 
		<center><?php
include "koneksi.php";
$sql = mysql_query("SELECT * FROM berita where idberita='$_GET[idberita]'");

while($row = mysql_fetch_array($sql)){

?>

<table style="text-align:justify;width:100%; background-color:#f0f0f0; border:1px solid #000099; padding:8px;" width="100%" border="0" cellspacing="1" cellpadding="2">
   <tr>
    <td width="450" ><b><h2><? echo $row['judul'] ?></h2></b></td>
  </tr>
  <tr>
  <td  align="right">Bangkalan, <? $bulan_long=array('Januari','Februari','Maret','April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'Nopember', 'Desember');
								$tgl_temp=explode("-",$row['tanggal']); 
						$tgl=$tgl_temp[2];
						$bln=$bulan_long[$tgl_temp[1]-1]; 
						$thn=$tgl_temp[0]; 		
						echo " "; echo $tgl ; echo " "; echo $bln; echo " ";echo $thn;echo " "; ?></td>
      </tr>
 
 <tr>
 
    <td width="450" align="center" ><a href="foto/<? echo $row[3];?>" class="pirobox"><p align="justify" ><img  style="float:left; margin:0 8px 4px 0;" width="250" height="250" src="foto/<? echo $row[3];?>"></a><? echo $row[1];?></p></td>
  </tr>

 
</table><br>
<?php
}
?>
</center>
   </div>
</body>
</html>                             

		 <div id="rightcolumn">
	
<br/>
	 
		<center><?php


$sql = mysql_query("SELECT * FROM berita ORDER BY idberita DESC LIMIT 1");

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
 
    <td width="450" align="center" ><p align="justify" ><img  style="float:left; margin:0 8px 4px 0;" width="250" height="250" src="foto/<? echo $row[3] ?>"><?php echo substr($row[1],0,26000)?><br/><a href="?kelurahan=detailberita&idberita=<?php echo $row['idberita'];?>"><font color='blue'>Read More . . .</font></a></p></td>
  </tr>

 
</table>
<?php
}
?>
</center>
   </div>

   <!-- End Wrapper -->
</body>
</html>                             
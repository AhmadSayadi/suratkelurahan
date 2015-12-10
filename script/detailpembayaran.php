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
   
<script type="text/javascript">
		var objAjax1;
		function getData(namasetting){
		objAjax1=buatajax();
			url1="script/getpoli.php";
			url1=url1+"?q="+namasetting;
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
<div align="center" id="leftPango1"><span class="title">DETAIL PEMBAYARAN</span></div>
 <div><br/> <h2>Data Pasien</h2>
  	<?php
			include "koneksi.php";
			include "cekstatus.php";
			$id = $_GET['norekammedik'];

$sql = " Select *
		from pasien
		where norekammedik='$id'";
$result = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_array($result);
	?>
	<h5> No Rekam Medik : <?php echo $row['norekammedik']?> <br/>           Nama Pasien : <u><?php 
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
	
	</h5>
	
 <table width="100%" border="0" cellpadding="2" cellspacing="2">
            <tr>
              <td><table align="left" border="0" cellpadding="0" cellspacing="5">
			  <tbody>
			 
			   <tr>
                    <td width="20%"><div align="left">No Ktp Pasien<div> </td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="20%"><div align="left"><?php echo $row["noktppasien"]; ?></div>
				    <td width="20%"><div align="left">Alamat Pasien </div></td>
                    <td width="5%"><div align="center">:</div></td> 
                   	<td width="30%"><div align="left"><?php echo $row["alamatpasien"] ?></div></td>
                				</td>
				   
					</tr>
					<tr>
					
					  <td width="20%"><div align="left">No Telp<div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="20%"><div align="left"><?php echo $row["notelppasien"] ?></div>
					
					 <td width="20%"><div align="left">Tempat Lahir<div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="20%"><div align="left"><?php echo $row["tempatlahir"] ?></div>
					</td>
				
					</tr>
                <tr>
				    <td><div align="left">Jenis Kelamin</div></td>
                    <td><div align="center">:</div></td>
                    <td><div align="left">
						<? echo $row["jeniskelamin"] ?></div>
                    </td>
				 <td width="20%"><div align="left">Tanggal Lahir</div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="20%"><div align="left"><?php 
$bulan_long=array('Januari','Februari','Maret','April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'Nopember', 'Desember');
$tgl_temp2=explode("-",$row['tanggallahir']); 
$tgl2=$tgl_temp2[2];
$bln2=$bulan_long[$tgl_temp2[1]-1]; 
$thn2=$tgl_temp2[0]; 					
echo $tgl2 ; echo " "; echo $bln2; echo " ";echo $thn2;

?></div>
					</td>
					
                </tr>
             <tr>
                    <td width="20%"><div align="left">KK  </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="20%"><div align="left"><? echo $row["kk"] ?></div>
					</td>
				</tr><tr>
                    <td width="20%"><div align="left">Status  </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="20%"><div align="left"><? $ffgd=mysql_fetch_array(mysql_query("select status from antrian where idantrian='$_GET[idantrian]'"));
					echo $ffgd["status"]; ?></div>
					</td>
				</tr>
				  	
				</tbody>
				</table>
				</td>
				</tr>
<tr><td align="right">        <br/><br/>
<?php
$ffg=mysql_fetch_array(mysql_query("select sudah from antrian where idantrian='$_GET[idantrian]'"));
$fff=$ffg['sudah'];
if($fff=='Sudah'){
?>
<tr><td>
<a onClick="return confirm('Apakah Anda Yakin Untuk Mencetak Bukti Pembayaran Ini ?')" target="_BLANK" href="script/reportdetailpembayaran.php?idantrian=<?php echo $_GET['idantrian'];?>"><img title="Report" src="images/report.png" width="45"><br/>Report</a>
</td><td>
<a  onClick="return confirm('Apakah Anda Yakin Untuk Membuat Surat Rujukan ?')" href="?puskesmas=tambahsuratrujukan&idantrian=<?php echo $_GET['idantrian'];?>"><img title="Surat Rujukan" src="images/surat.png" width="45"><br/>Surat Rujukan</a>
</td>
<td>
<a onClick="return confirm('Apakah Anda Yakin Pasien Ini Belum Melunasi Pembayaran?')" href="script/belum.php?idantrian=<?php echo $_GET['idantrian'];?>"><img title="Belum Lunas" src="images/belum.png" width="45"><br/>Belum Lunas</a>
</td>
</tr>

<?php

}else{
?>
<tr>
<td>
<a target="_BLANK" onClick="return confirm('Apakah Anda Yakin Untuk Mencetak Bukti Pembayaran Ini ?')" href="script/reportdetailpembayaran.php?idantrian=<?php echo $_GET['idantrian'];?>"><img title="Report" src="images/report.png" width="45"><br/>Report</a>
</td>
<td>
<a onClick="return confirm('Apakah Anda Yakin Pasien Ini Melunasi Pembayaran?')" href="script/lunas.php?idantrian=<?php echo $_GET['idantrian'];?>"><img title="Lunas" src="images/lunas.png" width="45"><br/>Lunas</a>
</td>
</tr>
<?php
}
?>
</td></tr>
				</table>
				</form>
				
				<?php
				$minta="select * from pelayanan where idantrian = '$_GET[idantrian]'";
				$eksekusi =mysql_query($minta);
		
				if(mysql_num_rows($eksekusi) != 0){
				?>
				<br/>
				<h2>Daftar Pelayanan</h2><br/>
		<table class="data" border="1" cellpadding="0" cellspacing="0">
		<tr align='center'>
		  <th width="3%">Poli</th>
		  <th width="3%">No</th>
		  <th width="10%">Tanggal</th>
		  <th width="10%">Pelayanan</th>
		  <th width="10%">Bayar</th>
		 </tr>

<tr>
<td colspan="4">Loket</td>
</tr>
<?
	$gg="select * from pelayanan where idantrian='$_GET[idantrian]'";
										$bb =mysql_query($gg);
										
										$nod=0;
										while($ff=mysql_fetch_array($bb)){
										
										if($ff['poli']=='Loket'){
										
									
									
										
										?>
<tr>

<td></td>
<td><?php echo $nod=$nod+1;?></td>
<td><?php
					$bulan_long=array('Januari','Februari','Maret','April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'Nopember', 'Desember');
					$tgl_temp=explode("-",$ff['tanggal']); 
						$tgl=$tgl_temp[2];
						$bln=$bulan_long[$tgl_temp[1]-1]; 
						$thn=$tgl_temp[0]; 	
 echo $tgl;
echo " "; 
 echo $bln;echo " "; 
 echo $thn; 
?></td>
<td><?php echo $ff['jenispelayanan'];?></td>
<td align="right"><?php echo $ff['bayar'];?></td>
</tr>
		
<?php
}
}
?>		


<tr>
<td colspan="4">Apotik</td>
</tr>
<?
	$gg="select * from pelayanan where idantrian='$_GET[idantrian]'";
										$bb =mysql_query($gg);
									
										$nod=0;
										while($ff=mysql_fetch_array($bb)){
										
										if($ff['poli']=='Apotik'){
										
									
									
										
										?>
<tr>

<td></td>
<td><?php echo $nod=$nod+1;?></td>
<td><?php
					$bulan_long=array('Januari','Februari','Maret','April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'Nopember', 'Desember');
					$tgl_temp=explode("-",$ff['tanggal']); 
						$tgl=$tgl_temp[2];
						$bln=$bulan_long[$tgl_temp[1]-1]; 
						$thn=$tgl_temp[0]; 	
 echo $tgl;
echo " "; 
 echo $bln;echo " "; 
 echo $thn; 
?></td>
<td><?php $dfg="select * from obat where id_obat = '$ff[jenispelayanan]'";
										$jjj=mysql_fetch_array(mysql_query($dfg));
										
										echo " ";
										echo $jjj['nama_obat'];
										echo " Sebanyak ";
										echo $ff['keterangan'];
										echo ", ";?></td>
<td align="right"><?php echo $ff['bayar'];?></td>
</tr>
		
<?php
}
}
?>		
		
		
<tr>
<td colspan="4">Gigi</td>
</tr>
<?
	$gg="select * from pelayanan where idantrian='$_GET[idantrian]'";
										$bb =mysql_query($gg);
									
										$nod=0;
										while($ff=mysql_fetch_array($bb)){
										
										if($ff['poli']=='Gigi'){
										
									
									
										
										?>
<tr>

<td></td>
<td><?php echo $nod=$nod+1;?></td>
<td><?php
					$bulan_long=array('Januari','Februari','Maret','April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'Nopember', 'Desember');
					$tgl_temp=explode("-",$ff['tanggal']); 
						$tgl=$tgl_temp[2];
						$bln=$bulan_long[$tgl_temp[1]-1]; 
						$thn=$tgl_temp[0]; 	
 echo $tgl;
echo " "; 
 echo $bln;echo " "; 
 echo $thn; 
?></td>
<td><?php $dfg="select * from setting where idsetting = '$ff[keterangan]'";
										$jjj=mysql_fetch_array(mysql_query($dfg));
										
										echo $jjj['namasetting'];
	
										?></td>
<td align="right"><?php echo $ff['bayar'];?></td>
</tr>
		
<?php
}
}
?>	

<tr>
<td colspan="4">UGD</td>
</tr>
<?
	$gg="select * from pelayanan where idantrian='$_GET[idantrian]'";
										$bb =mysql_query($gg);
									
										$nod=0;
										while($ff=mysql_fetch_array($bb)){
										
										if($ff['poli']=='UGD'){
										
									
									
										
										?>
<tr>

<td></td>
<td><?php echo $nod=$nod+1;?></td>
<td><?php
					$bulan_long=array('Januari','Februari','Maret','April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'Nopember', 'Desember');
					$tgl_temp=explode("-",$ff['tanggal']); 
						$tgl=$tgl_temp[2];
						$bln=$bulan_long[$tgl_temp[1]-1]; 
						$thn=$tgl_temp[0]; 	
 echo $tgl;
echo " "; 
 echo $bln;echo " "; 
 echo $thn; 
?></td>
<td><?php $dfg="select * from setting where idsetting = '$ff[keterangan]'";
										$jjj=mysql_fetch_array(mysql_query($dfg));
										
										echo $jjj['namasetting'];
	
										?></td>
<td align="right"><?php echo $ff['bayar'];?></td>
</tr>
		
<?php
}
}
?>		
	<tr>
<td colspan="4">Laboratorium</td>
</tr>
<?
	$gg="select * from pelayanan where idantrian='$_GET[idantrian]'";
										$bb =mysql_query($gg);
									
										$nod=0;
										while($ff=mysql_fetch_array($bb)){
										
										if($ff['poli']=='Laboratorium'){
										
									
									
										
										?>
<tr>

<td></td>
<td><?php echo $nod=$nod+1;?></td>
<td><?php
					$bulan_long=array('Januari','Februari','Maret','April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'Nopember', 'Desember');
					$tgl_temp=explode("-",$ff['tanggal']); 
						$tgl=$tgl_temp[2];
						$bln=$bulan_long[$tgl_temp[1]-1]; 
						$thn=$tgl_temp[0]; 	
 echo $tgl;
echo " "; 
 echo $bln;echo " "; 
 echo $thn; 
?></td>
<td><?php $dfg="select * from setting where idsetting = '$ff[keterangan]'";
										$jjj=mysql_fetch_array(mysql_query($dfg));
										
										echo $jjj['namasetting'];
	
										?></td>
<td align="right" ><?php echo $ff['bayar'];?></td>
</tr>
		
<?php
}
}
?>		
		<tr>
<td colspan="4">Ambulance</td>
</tr>
<?
	$gg="select * from pelayanan where idantrian='$_GET[idantrian]'";
										$bb =mysql_query($gg);
									
										$nod=0;
										while($ff=mysql_fetch_array($bb)){
										
										if($ff['poli']=='Ambulance'){
										
									
									
										
										?>
<tr>

<td></td>
<td><?php echo $nod=$nod+1;?></td>
<td><?php
					$bulan_long=array('Januari','Februari','Maret','April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'Nopember', 'Desember');
					$tgl_temp=explode("-",$ff['tanggal']); 
						$tgl=$tgl_temp[2];
						$bln=$bulan_long[$tgl_temp[1]-1]; 
						$thn=$tgl_temp[0]; 	
 echo $tgl;
echo " "; 
 echo $bln;echo " "; 
 echo $thn; 
?></td>
<td><?php $dfg="select * from setting where idsetting = '$ff[keterangan]'";
										$jjj=mysql_fetch_array(mysql_query($dfg));
										
										echo $jjj['namasetting'];
	
										?></td>
<td align="right" ><?php echo $ff['bayar'];?></td>
</tr>
		
<?php
}
}
?>		
		
		
		<tr>
<td colspan="4">Kamar</td>
</tr>
<?
	$gg="select * from pelayanan where idantrian='$_GET[idantrian]'";
										$bb =mysql_query($gg);
									
										$nod=0;
										while($ff=mysql_fetch_array($bb)){
										
										if($ff['poli']=='Kamar'){
										
									
									
										
										?>
<tr>

<td></td>
<td><?php echo $nod=$nod+1;?></td>
<td><?php
					$bulan_long=array('Januari','Februari','Maret','April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'Nopember', 'Desember');
					$tgl_temp=explode("-",$ff['tanggal']); 
						$tgl=$tgl_temp[2];
						$bln=$bulan_long[$tgl_temp[1]-1]; 
						$thn=$tgl_temp[0]; 	
 echo $tgl;
echo " "; 
 echo $bln;echo " "; 
 echo $thn; 
?></td>
<td><?php $dfg="select * from kamar where idkamar = '$ff[keterangan]'";
										$jjj=mysql_fetch_array(mysql_query($dfg));
										
										echo $jjj['namakamar'];
	
										?></td>
<td align="right" ><?php echo $ff['bayar'];?></td>
</tr>
		
<?php
}
}
?>		
		
		
		

		<tr>
<td colspan="4">Rawat Inap</td>
</tr>
<?
	$gg="select * from pelayanan where idantrian='$_GET[idantrian]'";
										$bb =mysql_query($gg);
									
										$nod=0;
										while($ff=mysql_fetch_array($bb)){
										
										if($ff['poli']=='Rawat Inap'){
										
									
									
										
										?>
<tr>

<td></td>
<td><?php echo $nod=$nod+1;?></td>
<td><?php
					$bulan_long=array('Januari','Februari','Maret','April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'Nopember', 'Desember');
					$tgl_temp=explode("-",$ff['tanggal']); 
						$tgl=$tgl_temp[2];
						$bln=$bulan_long[$tgl_temp[1]-1]; 
						$thn=$tgl_temp[0]; 	
 echo $tgl;
echo " "; 
 echo $bln;echo " "; 
 echo $thn; 
?></td>
<td><?php $dfg="select * from setting where idsetting = '$ff[keterangan]'";
										$jjj=mysql_fetch_array(mysql_query($dfg));
										
										echo $jjj['namasetting'];
	
										?></td>
<td align="right" ><?php echo $ff['bayar'];?></td>
</tr>
		
<?php
}
}
?>		
		
		
		
		
		
		
		
		
		
		
		
<tr>
	<td align="right"><?php 
	$mm="select sum(bayar) from pelayanan where idantrian='$_GET[idantrian]'";
										$ll =mysql_fetch_array(mysql_query($mm));
	
	 $ll[0];?></td>
	
	</tr>
	
	<?
	$hhh=$ll[0];
	$ffd=$hhh+$ffd;

	}
					  
		?>
	
	<tr align='right'>
		  
		  <th colspan="4" align="right" width="10%">Total</th>
		  <th width="8%"><?php echo $ffd;?></th>
		 </tr>
	</table>
			

         </div>
  
 
</body>
</html>                             
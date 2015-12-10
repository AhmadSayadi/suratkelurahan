<?
include "koneksi.php";
if(isset($_POST['Submit'])) {
	$no = $_POST['no'];
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$poli = $_POST['poli'];
	$status = $_POST['status'];
	$biaya = $_POST['biaya'];
	$tgl_bayar = $_POST['tgl_bayar'];
		
$perintah = "update tb_transaksi set id_bayar='$id',nama='$nama',alamat='$alamat',poli='$poli',status='$status',biaya='$biaya',tgl_bayar='$tgl_bayar' where no=$no";
				$hasil = mysql_query($perintah);
				if ($hasil) {
				?><script language="JavaScript">alert('Data Disimpan');
				document.location='bayar.php'</script><?
				}else {
					echo "('sql:'.$perintah.mysql_error())";
				}
	} else {
	?>


<body>

		<?php
	$id = $_GET['id'];
	
$sql = " Select *
		from tb_transaksi
		where no='$id'";
$result = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_array($result);
	?>
	 <div align="center" id="leftPango1"><span class="title">DETAIL REGISTRASI</span></div>
	<h2>DETAIL REGISTRASI</h2><br>
	<form id="form1" name="form1" method="post" action="">         
 <table width="80%" border="0" cellpadding="2" cellspacing="2">
            <tr>
              <td><table align="left" border="0" cellpadding="0" cellspacing="5">
			  <tbody>
			  <tr>
				  <td width="5%"><div align="center">1</div></td>
                    <td width="30%"><div align="left">No </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><?=$row["no"] ?></div></td> 
                </tr>
			   <tr>
                    <td width="5%"><div align="center">2</div></td>
                    <td width="30%"><div align="left">ID </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><?=$row["id_bayar"] ?></div>
					</td>
                <tr>
				  <td width="5%"><div align="center">3</div></td>
                    <td width="30%"><div align="left">Nama </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   
                   	<td width="50%"><div align="left"><?=$row["nama"] ?></div></td>
                  
                </tr>
                <tr>
                    <td width="5%"><div align="center">4</div></td>
                    <td width="30%"><div align="left">Alamat </td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><?=$row["alamat"] ?></div>
					</td>
				</tr>
				<tr valign="top">
                    <td><div align="center">5</div></td>
                    <td><div align="left">Poli </div></td>
                    <td><div align="center">:</div></td>
                    <td><div align="left"><?=$row["poli"] ?></div>
                    </td>
				  </tr>
                  <tr>
                    <td width="5%"><div align="center">6</div></td>
                    <td width="30%"><div align="left">Status </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><?=$row["status"] ?></div>
					</td>
				</tr>
				<tr>
                    <td width="5%"><div align="center">7</div></td>
                    <td width="30%"><div align="left">Biaya  </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><?=$row["biaya"] ?></div>
					</td>
				</tr>
				<tr>
                    <td width="5%"><div align="center">8</div></td>
                    <td width="30%"><div align="left">Tgl Pembayaran  </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><?=$row["tgl_bayar"] ?></div>
					</td>
				</tr>
				<tr>
				<th colspan="2" scope="row">&nbsp;</th>
	<td><div align="center"></div></td>
				<td><div align="left">
				</tr>
				</tbody>
				</table>
				</td>
				</tr>
				</table>
				</form>
                  	 
		 </div>
         
		 <!-- End right Column -->
		 
		
		 <!-- Begin Footer -->
		 <div id="footer"></div>
		 <!-- End Footer -->
		 
   </div>
   <!-- End Wrapper -->
</body>
</html>
<?
}
?>
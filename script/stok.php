<?
include "koneksi.php";
if(isset($_POST['Submit'])) {
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$jumlah = $_POST['jumlah'];
	$harga = $_POST['harga'];
		
$perintah = "INSERT INTO obat VALUES ('','$id','$nama','$jumlah','$harga')";
				$hasil = mysql_query($perintah);
				if ($hasil) {
				?>
				<script> alert("Data Tersimpan");</script>
				<script>document.location.href="apotik.php?puskesmas=daftarobat" </script>
				<?
				}else { 
				?><script> alert("Data Tidak Tersimpan");</script>
					<script>document.location.href="apotik.php?puskesmas=stok" </script>
				<?
				
				}
	} else {
	?>

<body>

<div> <div align="center" id="leftPango1"><span class="title">FORM OBAT</span></div>
	<br/>
 <h2>Form Obat</h2>
	</div>
		 <div id="rightcolumn">

			<form id="form1" name="form1" method="post" action="">         
 <table width="80%" border="0" cellpadding="2" cellspacing="2">
            <tr>
            
            </tr>
            <tr>
              <td><table align="left" border="0" cellpadding="0" cellspacing="5">
			  <tbody>
				<tr>
                    <td width="5%"><div align="center">1</div></td>
                    <td width="30%"><div align="left">ID </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   	<td width="50%"><div align="left"><input name="id" id="id" size="25" type="text" value="<? echo $id ?>"/></div>
					</td>
				</tr>
                <tr>
				  <td width="5%"><div align="center">2</div></td>
                    <td width="30%"><div align="left">Nama Obat </div></td>
                    <td width="5%"><div align="center">:</div></td>
                   
                   	<td width="50%"><div align="left"><input name="nama" id="nama" size="25" type="text" value="<? echo $nama ?>"/></div></td>
                  
                </tr>
				<tr valign="top">
                    <td><div align="center">3</div></td>
                    <td><div align="left">Jumlah Stok </div></td>
                    <td><div align="center">:</div></td>
                    <td><div align="left"><input name="jumlah" readonly="true" size="25" type="text" id="jumlah" value="0" /></div>
                    </td>
				  </tr><tr valign="top">
                    <td><div align="center">4</div></td>
                    <td><div align="left">Harga Per Biji</div></td>
                    <td><div align="center">:</div></td>
                    <td><div align="left"><input name="harga"  size="25" type="text" id="harga" value="0" /></div>
                    </td>
				  </tr>
				<tr>
				<th colspan="2" scope="row">&nbsp;</th>
	<td><div align="center"></div></td>
				<td><div align="left">
				<input type="Submit" name="Submit" value="Submit" />
				<input type="reset" value="reset" /></div></td>
				</tr>
				</tbody>
				</table>
				</td>
				</tr>
				</table>
				</form>
	<?php
	
	}
	?>              	 
	
         </div>
		 
   </div>
   <!-- End Wrapper -->
</body>
</html>
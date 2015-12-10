<center>
<table align="center" width="100%">
<tr>
<td width="25%"><a href="?puskesmas=layanan&puskesmasq=layananumum&idpasien=<?php echo $_GET['idpasien'] ?>"><img src="images/u.png" width="50"><br/>Poli Umum</a></td>
<?php
//$sqll = " Select * from pasien where idpasien='$_GET[idpasien]'";
//$result1 = mysql_query($sqll);
//$row1 = mysql_fetch_array($result1);
//$tanggallahir=$row1['tanggallahir'];
//$jeniskelamin=$row1['jeniskelamin'];
//$tanggalsekarang=date("Y-m-d");

//if($jeniskelamin=='Wanita'){
?>
<td width="25%"><a href="?puskesmas=layanan&puskesmasq=layanankia&idpasien=<?php echo $_GET['idpasien'] ?>"><img src="images/k.png" width="50"><br/>Poli Ibu Dan Anak</a></td>
<?php
//}
?>

<td width="25%"><a href="?puskesmas=layanan&puskesmasq=layanangigi&idpasien=<?php echo $_GET['idpasien'] ?>"><img src="images/g.png" width="50"><br/>Poli Gigi</a></td>
</tr><tr>
<td width="25%"><a href="?puskesmas=layanan&puskesmasq=layananugd&idpasien=<?php echo $_GET['idpasien'] ?>"><img src="images/d.png" width="50"><br/>UGD</a></td>

<td width="25%"><a href="?puskesmas=layanan&puskesmasq=layananparukusta&idpasien=<?php echo $_GET['idpasien'] ?>"><img src="images/p.png" width="50"><br/>Paru & Kusta</a></td>
<td width="25%"><a href="?puskesmas=layanan&puskesmasq=layananmtbs&idpasien=<?php echo $_GET['idpasien'] ?>"><img src="images/m.png" width="50"><br/>MTBS</a></td>
</tr>
</table>
</center>

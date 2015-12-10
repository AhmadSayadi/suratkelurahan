<div align="center" id="leftPango1"><span class="title">MENU RUJUKAN POLI UGD</span></div>
<center>
<table align="center" width="100%">
<tr>
<td width="25%"><a href="?puskesmas=pelayananugd&rujukan=rujukanlaboratoriumugd&idantrian=<?php echo $_GET['idantrian'] ?>"><img src="images/u.png" width="50"><br/>Laboratorium</a></td>
<td width="25%"><a href="?puskesmas=pelayananugd&rujukan=rujukanapotikugd&idantrian=<?php echo $_GET['idantrian'] ?>"><img src="images/k.png" width="50"><br/>Apotik</a></td>
<?php
$cek = mysql_query("SELECT * FROM kamar WHERE status='kosong'");
 if(mysql_num_rows($cek)!=0 ){
?>
<td width="25%"><a href="?puskesmas=pelayananugd&rujukan=rujukaninapugd&idantrian=<?php echo $_GET['idantrian'] ?>"><img src="images/i.png" width="50"><br/>Rawat Inap</a></td>
<?php
}
?>
<td width="25%"><a href="?puskesmas=pelayananugd&rujukan=rujukanrsugd&idantrian=<?php echo $_GET['idantrian'] ?>"><img src="images/l.png" width="50"><br/>Rumah Sakit</a></td>
<td width="25%"><a href="?puskesmas=pelayananugd&rujukan=rujukanambulanugd&idantrian=<?php echo $_GET['idantrian'] ?>"><img src="images/r.png" width="50"><br/>Ambulan</a></td>
</tr>
</table>
</center>

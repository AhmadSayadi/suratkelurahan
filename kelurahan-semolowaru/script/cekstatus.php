<? 
include "../koneksi.php";
$ffgd=mysql_fetch_array(mysql_query("select status from antrian where idantrian='$_GET[idantrian]'"));
	if($ffgd['status'] != 'Bayar')
	{
	 $dddddd=mysql_query("update pelayanan set bayar='0' where idantrian='$_GET[idantrian]' and poli='Loket'");
	 $ddddddw=mysql_query("update pelayanan set bayar='0' where idantrian='$_GET[idantrian]' and poli='UGD'");
	 $ddddddww=mysql_query("update pelayanan set bayar='0' where idantrian='$_GET[idantrian]' and poli='Gigi'");
	 $ddddddwww=mysql_query("update pelayanan set bayar='0' where idantrian='$_GET[idantrian]' and poli='Apotik'");
	 $ddddddwwww=mysql_query("update pelayanan set bayar='0' where idantrian='$_GET[idantrian]' and poli='Laboratorium'");
	}
?>
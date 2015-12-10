<?php
include "../koneksi.php";
$id = $_GET['idantrian'];
$sql="select * from antrian where idantrian = $id";
$qry=@mysql_query($sql)
	or die ("Query salah: " .  mysql_error());
$row = mysql_fetch_array($qry);
$urut=$row['idantrian'] ;


$SQL2 = "delete from antrian
			where idantrian=$urut ";
$qry2= @mysql_query($SQL2)
	or die ("Query salah: " .  mysql_error());
	?><script language="JavaScript">alert('Data telah dihapus');
document.location='../loket.php?puskesmas=daftarantrianumum'</script>
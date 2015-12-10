<?php
include "../koneksi.php";
$id = $_GET[id];
$sql="select * from obat_keluar where  no=$id";
$qry=@mysql_query($sql)
	or die ("Query salah: " .  mysql_error());
$row = mysql_fetch_array($qry);
$urut=$row[no] ;


$SQL2 = "delete from obat_keluar
			where no=$urut ";
$qry2= @mysql_query($SQL2)
	or die ("Query salah: " .  mysql_error());
	?><script language="JavaScript">alert('Data telah dihapus');
document.location='autokeluar.php'</script><?

?>
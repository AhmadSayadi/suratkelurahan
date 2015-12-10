<?php
include "../koneksi.php";
$id = $_GET['iddokter'];
$sql="select * from dokter where iddokter = $id";
$qry=@mysql_query($sql)
	or die ("Query salah: " .  mysql_error());
$row = mysql_fetch_array($qry);
$urut=$row['iddokter'] ;


$SQL2 = "delete from dokter
			where iddokter=$urut ";
$qry2= @mysql_query($SQL2)
	or die ("Query salah: " .  mysql_error());
	?><script language="JavaScript">alert('Data telah dihapus');
document.location='../tatausaha.php?puskesmas=dokter'</script>
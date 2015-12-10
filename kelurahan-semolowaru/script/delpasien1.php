<?php
include "../koneksi.php";
$id = $_GET['idpasien'];
$sql="select * from pasien where idpasien=$id";
$qry=@mysql_query($sql)
	or die ("Query salah: " .  mysql_error());
$row = mysql_fetch_array($qry);
$urut=$row['idpasien'] ;


$SQL2 = "delete from pasien
			where idpasien=$urut ";
$qry2= @mysql_query($SQL2)
	or die ("Query salah: " .  mysql_error());
	?><script language="JavaScript">alert('Data telah dihapus');
document.location='../loket.php?puskesmas=daftarpasien'</script>
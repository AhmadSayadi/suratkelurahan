<?php
include "../koneksi.php";
$id = $_GET['id_rujukan_keluar'];
$sql="delete from rujukan_keluar where  id_rujukan_keluar=$id";
$qry2=@mysql_query($sql)

or die ("Query salah: " .  mysql_error());
	?><script language="JavaScript">alert('Data telah dihapus');
document.location='../pembayaran.php?puskesmas=tambahsuratrujukan&idantrian=<?php echo $_GET['idantrian'];?>'</script><?
?>
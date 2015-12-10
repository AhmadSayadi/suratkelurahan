<?php
include "../koneksi.php";
$id = $_GET['idrujukan'];

$SQL2 = "delete from rujukan
			where idrujukan=$id ";
$qry2= @mysql_query($SQL2)
	or die ("Query salah: " .  mysql_error());
	?><script language="JavaScript">alert('Data telah dihapus');
document.location='../gizi.php?puskesmas=pelayanangizi&rujukan=rujukanugdgizi&idantrian=<?php echo $_GET['idantrian'];?>'</script>
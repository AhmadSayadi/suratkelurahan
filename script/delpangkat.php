<?php
include "../koneksi.php";


$SQL2 = "delete from setting
			where idsetting='$_GET[idsetting]' ";
$qry2= @mysql_query($SQL2)
	or die ("Query salah: " .  mysql_error());
	?><script language="JavaScript">alert('Data telah dihapus');
document.location='../tatausaha.php?puskesmas=tambahpangkat'</script>
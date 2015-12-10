<?php
include "../koneksi.php";


$SQL2 = "delete from berita
			where idberita='$_GET[idberita]' ";
$qry2= @mysql_query($SQL2)
	or die ("Query salah: " .  mysql_error());
	?><script language="JavaScript">alert('Data telah dihapus');
document.location='../website.php?kelurahan=daftarberita'</script>
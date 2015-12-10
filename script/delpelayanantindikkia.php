<?php
include "../koneksi.php";
$id = $_GET['idpelayanan'];

$SQL2 = "delete from pelayanan
			where idpelayanan=$id ";
$qry2= @mysql_query($SQL2)
	or die ("Query salah: " .  mysql_error());
	?><script> alert("Data Telah Terhapus");</script>
<script>document.location.href="../kia.php?puskesmas=pelayanankia&pelayanan=pelayanankiatindik&idantrian=<?php echo $_GET['idantrian']?>" </script>
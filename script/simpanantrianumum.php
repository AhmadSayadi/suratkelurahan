<?php
include "../koneksi.php";
  $sql="INSERT INTO antrian VALUES('', '$_GET[norekammedik]','$_POST[nip]','$_POST[poli]', '$_POST[status]','$_POST[keterangan]','$_POST[tanggalkunjungan]','Belum','')";
$result=mysql_query($sql);

$max=mysql_query("select max(idantrian) from antrian");
	$hasilmax=mysql_fetch_array($max);
	$idmax=$hasilmax[0];
	
	
$sqld="INSERT INTO pelayanan VALUES('','$idmax', '$_GET[norekammedik]','Karcis Masuk', 'Loket','','$_POST[tanggalkunjungan]','$_POST[keterangan]')";
$resultd=mysql_query($sqld);

if($result){
?>
<script> alert("Data Telah Tersimpan");</script>
<script>document.location.href="../loket.php?puskesmas=daftarantrianumum" </script>
<?php
}else{
?><script> alert("Data Tidak Tersimpan");</script>
<script>document.location.href="../loket.php?puskesmas=daftarantrianumum" </script>
<?php
}
mysql_close();
?>
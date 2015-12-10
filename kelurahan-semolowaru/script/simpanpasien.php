<?php
include "../koneksi.php";
$max=mysql_query("select max(idpasien)+1 from pasien");
	$hasilmax=mysql_fetch_array($max);
	$idmax=$hasilmax[0];
   $waktu3=date("Y-m-d");

  $sql="INSERT INTO pasien VALUES('$idmax', '$_POST[norekammedik]','$_POST[namapasien]', '$_POST[alamatpasien]','$_POST[noktppasien]','$_POST[notelppasien]','$_POST[tempatlahir]','$_POST[tanggallahir]','$_POST[jeniskelamin]','$waktu3','$_POST[kk]','$_POST[namaibu]')";
$result=mysql_query($sql);
//echo $waktu3;
//check if query successful
if($result){
$max=mysql_query("select max(idpasien) from pasien");
	$hasilmax=mysql_fetch_array($max);
	$idmax=$hasilmax[0];
?>
<script> alert("Data Telah Tersimpan");</script>
<script>document.location.href="../loket.php?puskesmas=layanan&idpasien=<?php echo $idmax; ?>" </script>
<?php
}else{
?><script> alert("Data Tidak Tersimpan");</script>
<script>document.location.href="../loket.php?puskesmas=layanan&idpasien=<?php echo $idmax; ?>" </script>
<?php
}
mysql_close();
?>
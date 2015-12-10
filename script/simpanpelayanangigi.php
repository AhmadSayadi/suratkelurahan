<?php
include "../koneksi.php";
$waktu=date("Y-m-d");
 $sql="INSERT INTO pelayanan VALUES('', '$_GET[idantrian]', '$_GET[norekammedik]','$_POST[nip]','Gigi', '$_POST[namasetting]','$waktu','$_POST[keterangan]')";
$result=mysql_query($sql);
//echo $waktu3;
//check if query successful
if($result){
?>
<script> alert("Data Telah Tersimpan");</script>
<script>document.location.href="../gigi.php?puskesmas=pelayanangigi&idantrian=<?php echo $_GET['idantrian'];?>" </script>
<?php
}else{
?><script> alert("Data Tidak Tersimpan");</script>
<script>document.location.href="../gigi.php?puskesmas=pelayanangigi&idantrian=<?php echo $_GET['idantrian'];?>" </script>
<?php
}
mysql_close();
?>
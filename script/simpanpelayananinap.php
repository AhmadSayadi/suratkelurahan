<?php
include "../koneksi.php";
$waktu=date("Y-m-d");
 $sql="INSERT INTO pelayanan VALUES('', '$_GET[idantrian]', '$_GET[norekammedik]','','Rawat Inap', '$_POST[namasetting]','$waktu','$_POST[keterangan]')";
$result=mysql_query($sql);
//echo $waktu3;
//check if query successful
if($result){
?>
<script> alert("Data Telah Tersimpan");</script>
<script>document.location.href="../inap.php?puskesmas=pelayananrawatinap&idantrian=<?php echo $_GET['idantrian'];?>" </script>
<?php
}else{
?><script> alert("Data Tidak Tersimpan");</script>
<script>document.location.href="../inap.php?puskesmas=pelayananrawatinap&idantrian=<?php echo $_GET['idantrian'];?>" </script>
<?php
}
mysql_close();
?>
<?php
include "../koneksi.php";
$tgl=date("Y-m-d");
$stock1=mysql_fetch_array(mysql_query("SELECT norekammedik FROM antrian WHERE idantrian = '$_GET[idantrian]' ")); 
$harga1=$stock1['norekammedik'];
 $sql="INSERT INTO pelayanan VALUES('', '$_GET[idantrian]','$harga1','ANC/PNC','KIA','$_POST[diagnosaawal]','$tgl','')";
$result=mysql_query($sql);
//echo $waktu3;
//check if query successful
if($result){
?>
<script> alert("Data Telah Tersimpan");</script>
<script>document.location.href="../kia.php?puskesmas=pelayanankia&pelayanan=pelayanankiaanc&idantrian=<?php echo $_GET['idantrian'];?>" </script>
<?php
}else{
?><script> alert("Data Tidak Tersimpan");</script>
<script>document.location.href="../kia.php?puskesmas=pelayanankia&pelayanan=pelayanankiaanc&idantrian=<?php echo $_GET['idantrian'];?>" </script>
<?php
}
mysql_close();
?>
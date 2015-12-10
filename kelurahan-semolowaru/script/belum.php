<?php
include "../koneksi.php";

$sql="UPDATE antrian SET sudah='Belum' WHERE idantrian='$_GET[idantrian]'";
$result=mysql_query($sql);
$sqll="UPDATE rujukan SET status='Belum' WHERE idantrian='$_GET[idantrian]'";
$result=mysql_query($sqll);
$dfg="select * from antrian where idantrian='$_GET[idantrian]'";
$jjj=mysql_fetch_array(mysql_query($dfg));
//check if query successful
if($result){
?><script> alert("Data Belum Lunas");</script>
<script>document.location.href="../pembayaran.php?puskesmas=detailpembayaran&idantrian=<?php echo $_GET['idantrian'];?>&norekammedik=<?php echo $jjj['norekammedik'];?>" </script>
<?php
}

else {
echo mysql_error();
}

mysql_close();
?>
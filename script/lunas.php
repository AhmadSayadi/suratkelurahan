<?php
include "../koneksi.php";

$sqll="UPDATE antrian SET sudah = 'Sudah' WHERE idantrian='$_GET[idantrian]'";
$sql="UPDATE rujukan SET status = 'Sudah' WHERE idantrian='$_GET[idantrian]'";
$result=mysql_query($sql);
$result=mysql_query($sqll);
$dfg="select * from antrian where idantrian='$_GET[idantrian]'";
$jjj=mysql_fetch_array(mysql_query($dfg));
//check if query successful
if($result){
?><script> alert("Data Lunas");</script>
<script>document.location.href="../pembayaran.php?puskesmas=detailpembayaran&idantrian=<?php echo $_GET['idantrian'];?>&norekammedik=<?php echo $jjj['norekammedik'];?>" </script>
<?php
}

else {
echo mysql_error();
}

mysql_close();
?>
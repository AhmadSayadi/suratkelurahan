<?php
include "../koneksi.php";
if($_POST['rujukanke']==null){
$erik="Tidak";
}
else{
$erik="Ada";
}
$sql="UPDATE antrian SET tanggalkunjungan = '$_POST[tanggalkunjungan]', keterangan='$_POST[keterangan]' WHERE idantrian='$_GET[idantrian]'";
$result=mysql_query($sql);

//check if query successful
if($result){
?><script> alert("Data Telah Terupdate");</script>
<script>document.location.href="../umum.php?puskesmas=pelayananumum&idantrian=<?php echo $_GET['idantrian'];?>" </script>
<?php
}

else {
echo mysql_error();
}

mysql_close();
?>
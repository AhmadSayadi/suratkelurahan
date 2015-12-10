<?php
include "../koneksi.php";
$sql="UPDATE setting SET keterangan = '$_POST[biaya]' WHERE idsetting='$_GET[idsetting]'";
$result=mysql_query($sql);


//check if query successful
if($result){
?><script> alert("Data Telah Terupdate");</script>
<script>document.location.href="../tatausaha.php?puskesmas=tambahstatus" </script>
<?php
}

else {
echo mysql_error();
}

mysql_close();
?>
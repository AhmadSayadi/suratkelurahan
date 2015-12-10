<?php
include "../koneksi.php";
$sql="UPDATE tabel_admin SET password = '$_POST[biaya]' WHERE id_admin='$_GET[id_admin]'";
$result=mysql_query($sql);


//check if query successful
if($result){
?><script> alert("Data Telah Terupdate");</script>
<script>document.location.href="../tatausaha.php?puskesmas=settingakunaplikasi" </script>
<?php
}

else {
echo mysql_error();
}

mysql_close();
?>
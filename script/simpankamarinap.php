<?php
include "../koneksi.php";


  $sql="INSERT INTO kamar VALUES('', '$_POST[nama]','$_POST[biaya]', '')";
$result=mysql_query($sql);
//echo $waktu3;
//check if query successful
if($result){
?>
<script> alert("Data Telah Tersimpan");</script>
<script>document.location.href="../tatausaha.php?puskesmas=kamarinap" </script>
<?php
}else{
?><script> alert("Data Tidak Tersimpan");</script>
<script>document.location.href="../tatausaha.php?puskesmas=kamarinap" </script>
<?php
}
mysql_close();
?>
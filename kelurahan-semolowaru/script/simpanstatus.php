<?php
include "../koneksi.php";
$max=mysql_query("select max(idsetting)+1 from setting");
	$hasilmax=mysql_fetch_array($max);
	$idmax=$hasilmax[0];
   $waktu3=date("Y-m-d");

  $sql="INSERT INTO setting VALUES('$idmax', '$_POST[nama]','$_POST[biaya]', 'Status')";
$result=mysql_query($sql);
//echo $waktu3;
//check if query successful
if($result){
?>
<script> alert("Data Telah Tersimpan");</script>
<script>document.location.href="../tatausaha.php?puskesmas=tambahstatus" </script>
<?php
}else{
?><script> alert("Data Tidak Tersimpan");</script>
<script>document.location.href="../tatausaha.php?puskesmas=tambahstatus" </script>
<?php
}
mysql_close();
?>
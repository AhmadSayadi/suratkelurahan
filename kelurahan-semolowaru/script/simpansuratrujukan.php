<?php
include "../koneksi.php";
$max=mysql_query("select max(id_rujukan_keluar)+1 from rujukan_keluar");
	$hasilmax=mysql_fetch_array($max);
	$idmax=$hasilmax[0];
   $waktu3=date("Y-m-d");

  $sql="INSERT INTO rujukan_keluar VALUES('$idmax', '$_GET[norekammedik]','$_POST[rujukan]', '$_POST[keterangan]', '$_POST[ttd]' , '$_GET[idantrian]','$waktu3', '$_POST[kota]', '$_POST[diagnosa]', '$_POST[terapi]')";
$result=mysql_query($sql);
//echo $waktu3;
//check if query successful
if($result){
?>
<script> alert("Data Telah Tersimpan");</script>
<script>document.location.href="../pembayaran.php?puskesmas=tambahsuratrujukan&idantrian=<?php echo $_GET['idantrian'];?>" </script>
<?php
}else{
?><script> alert("Data Tidak Tersimpan");</script>
<script>document.location.href="../pembayaran.php?puskesmas=tambahsuratrujukan&idantrian=<?php echo $_GET['idantrian'];?>" </script>
<?php
}
mysql_close();
?>
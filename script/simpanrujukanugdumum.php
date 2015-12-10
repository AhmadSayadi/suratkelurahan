<?php
include "../koneksi.php";
$tgl=date("Y-m-d");
 $mintadss="select * from antrian where idantrian ='$_GET[idantrian]'";
 $eksekusidss = mysql_fetch_array(mysql_query($mintadss));
 $sql="INSERT INTO rujukan VALUES('', '$_GET[idantrian]','$tgl','$_POST[diagnosaawal]', '','UGD','Umum','Belum','','$eksekusidss[norekammedik]')";
$result=mysql_query($sql);
//echo $waktu3;
//check if query successful
if($result){
?>
<script> alert("Data Telah Tersimpan");</script>
<script>document.location.href="../umum.php?puskesmas=pelayananumum&rujukan=rujukanugdumum&idantrian=<?php echo $_GET['idantrian'];?>" </script>
<?php
}else{
?><script> alert("Data Tidak Tersimpan");</script>
<script>document.location.href="../umum.php?puskesmas=pelayananumum&rujukan=rujukanugdumum&idantrian=<?php echo $_GET['idantrian'];?>" </script>
<?php
}
mysql_close();
?>
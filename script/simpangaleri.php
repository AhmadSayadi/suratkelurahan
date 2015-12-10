<?php
  // code A
  include "../koneksi.php";
  // end of code A
  
  // code B
  $lokasi_file = $_FILES['file']['tmp_name'];
  $tipe_file   = $_FILES['file']['type'];
  $nama   = $_FILES['file']['name'];
  $direktori   = "../foto/$nama";

  // end of code B
  

	move_uploaded_file($lokasi_file,$direktori); 
  
    // code C

	$max=mysql_query("select max(idsetting)+1 from setting");
	$hasilmax=mysql_fetch_array($max);
	$idmax=$hasilmax[0];
    $sql = "insert into setting (idsetting, namasetting, keterangan, jenissetting) values ('$idmax', '$nama', '$_POST[keterangan]', 'Galery')";
    $aksi = mysql_query($sql);
    // end of code C
	
if($aksi){
?>
<script> alert("Data Telah Tersimpan");</script>
<script>document.location.href="../website.php?kelurahan=tambahgaleri" </script>
<?php
}else{
?><script> alert("Data Tidak Tersimpan");</script>
<script>document.location.href="../website.php?kelurahan=tambahgaleri" </script>
<?php
}
mysql_close();
?>
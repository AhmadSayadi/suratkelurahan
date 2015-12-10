<?php

   include "fungsi_koneksi.php";


  $lokasi_file=$_FILES['file']['tmp_name'];
  $tipe_file=$_FILES['file']['type'];
   $nama_file=$_FILES['file']['name'];
  $hari1=date("Y-m-d");
	$direktori="../foto/$nama_file";
	move_uploaded_file($lokasi_file,$direktori); 
    $koneksi = koneksi_db();
    $sql = "insert into berita values('', '$_POST[isi]','$hari1', '$nama_file', '$_POST[judul]')";
    $aksi = mysql_query($sql,$koneksi);
	if($aksi){
?>
<script> alert("Data Telah Tersimpan");</script>
<script>document.location.href="../website.php?kelurahan=daftarberita" </script>
<?php
}else{
?><script> alert("Data Tidak Tersimpan");</script>
<script>document.location.href="../website.php?kelurahan=daftarberita" </script>
<?php
}
mysql_close();
  
?>
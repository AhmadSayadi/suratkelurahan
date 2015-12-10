<?php
include "../koneksi.php";
$sql="UPDATE berita SET isiberita = '$_POST[isi]', judul = '$_POST[judul]' WHERE idberita='$_GET[idberita]'";
$result=mysql_query($sql);


//check if query successful
if($result){
?><script> alert("Data Telah Terupdate");</script>
<script>document.location.href="../website.php?kelurahan=daftarberita" </script>
<?php
}

else {
echo mysql_error();
}

mysql_close();
?>
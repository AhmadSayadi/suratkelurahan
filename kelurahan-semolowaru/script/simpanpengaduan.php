<? 
include "../koneksi.php";
$pesan=$_POST['pesan'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$tgl=date("Y-m-d");
$psn=htmlspecialchars($pesan);
$perintah = "INSERT INTO pengaduan VALUES ('','$nama','$email','$psn','$tgl','no')";
$hasil = mysql_query($perintah);
if ($hasil)
{
	header("location:../index.php?kelurahan=isipengaduan");
}
else
{ 
	echo "ERORRRR !!!!!";
}			
?>
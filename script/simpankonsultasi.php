<? 
include "../koneksi.php";
$pesan=$_POST['pesan'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$tgl=date("Y-m-d");
$psn=htmlspecialchars($pesan);
$perintah = "INSERT INTO konsultasi VALUES ('','$nama','$email','$psn','$tgl','no')";
$hasil = mysql_query($perintah);
if ($hasil)
{
	header("location:../index.php?puskesmas=konsultasi");
}
else
{ 
	echo "ERORRRR !!!!!";
}			
?>
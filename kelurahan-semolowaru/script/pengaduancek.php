<?
include "../koneksi.php";
$opt=$_GET['opt'];
$id=$_GET['id'];
if ($opt=='ok')
{
	$perintah = "UPDATE pengaduan SET status='yes' WHERE id = $id";
	$hasil = mysql_query($perintah);
	if ($hasil)
	{
		header("location:../website.php?kelurahan=pengaduan");
	}
	else
	{ 
		echo "GAGAL !!!!";
	}
}
if ($opt=='hapus')
{
	$perintah = "DELETE FROM pengaduan WHERE id=$id";
	$hasil = mysql_query($perintah);
	if ($hasil)
	{
	header("location:../website.php?kelurahan=pengaduan");
	}
	else
	{ 
		echo "GAGAL !!!!";
	}
}
?>
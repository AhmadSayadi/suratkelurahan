<?
include "../koneksi.php";
$opt=$_GET['opt'];
$id=$_GET['id'];
if ($opt=='ok')
{
	$perintah = "UPDATE bukutamu SET status='yes' WHERE id = $id";
	$hasil = mysql_query($perintah);
	if ($hasil)
	{
		header("location:../website.php?kelurahan=administrator");
	}
	else
	{ 
		echo "GAGAL !!!!";
	}
}
if ($opt=='hapus')
{
	$perintah = "DELETE FROM bukutamu WHERE id=$id";
	$hasil = mysql_query($perintah);
	if ($hasil)
	{
	header("location:../website.php?kelurahan=administrator");
	}
	else
	{ 
		echo "GAGAL !!!!";
	}
}
?>
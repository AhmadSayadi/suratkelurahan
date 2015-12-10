<?
$katakunci=$_POST['passwd'];
if ($katakunci=="genkigama")
{
	session_start();
	$_SESSION['user_id']="administrator";
	header("location:administrator.php");
}
else
{
	header("location:admin.php?opt=ngawur");
}
?>
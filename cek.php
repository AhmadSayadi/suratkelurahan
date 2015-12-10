<?php 
	session_start(); 
	include "koneksi.php";
	 
	$username = $_POST['username']; 
	$password = $_POST['password']; 
	$op = $_GET['op']; 
	 
	if($op=="in"){ 
	    $cek = mysql_query("SELECT * FROM tabel_admin WHERE username='$username' AND password='$password'"); 
	    if(mysql_num_rows($cek)==1){//jika berhasil akan bernilai 1 
	        $c = mysql_fetch_array($cek); 
	        $_SESSION['username'] = $c['username']; 
	        $_SESSION['level'] = $c['level']; 
	        if($c['level']=="website"){ 
	            header("location:website.php"); 
			}
	        }else{ 
	        echo "<script>alert('Username dan Password anda salah !'); 
document.location.href='index.php';
</script>\n";
	    } 
	}else if($op=="out"){ 
	    unset($_SESSION['username']); 
	    unset($_SESSION['level']); 
	    header("location:index.php"); 
} 
	?> 
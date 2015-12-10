<?php  
session_start();
// Menghapus session dari browser  
session_destroy(); 

header( "Location: http:index.php" );
/*echo "<script>alert('terimakasih atas kunjungan anda'); document.location.href='index.php';</script>\n";*/
exit;
?>
 

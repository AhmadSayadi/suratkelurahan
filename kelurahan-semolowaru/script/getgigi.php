<?php
include "../koneksi.php";

	$kodepulsa=$_GET['q'];
	if($kodepulsa){
		$query=mysql_query("select keterangan from setting where idsetting='$kodepulsa'");
		while($hasil=mysql_fetch_array($query)){
			echo $hasil['keterangan'];
		}
	}
?>
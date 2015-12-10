<?php
include "../koneksi.php";

	$kodepulsa=$_GET['q'];
	if($kodepulsa){
		$query=mysql_query("select alamatpasien from pasien where nomorpasien='$kodepulsa'");
		while($hasil=mysql_fetch_array($query)){
			echo $hasil['alamatpasien'];
		}
	}
?>
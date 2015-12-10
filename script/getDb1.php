<?php
include "../koneksi.php";

	$kodepulsa=$_GET['q'];
	if($kodepulsa){
		$query=mysql_query("select nama_obat from obat where id_obat='$kodepulsa'");
		while($hasil=mysql_fetch_array($query)){
			echo $hasil['nama_obat'];
		}
	}
?>
<?php
include "../koneksi.php";

	$kodepulsa=$_GET['q'];
	if($kodepulsa){
		$query=mysql_query("select sewa from kamar where idkamar='$kodepulsa'");
		while($hasil=mysql_fetch_array($query)){
			echo $hasil['sewa'];
		}
	}
?>
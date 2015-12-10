<?php
	$kejaksaanq= $_GET['kelurahanq'];
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	switch ($kejaksaanq) 
	{
		//Utama
		case  "layananumum": include "script/layananumum.php";break;
		case  "layanankia": include "script/layanankia.php";break;
		case  "layanangigi": include "script/layanangigi.php";break;
		case  "layananlab": include "script/layananlab.php";break;
		case  "layananrawatinap": include "script/layananrawatinap.php";break;
		case  "layananugd": include "script/layananugd.php";break;
		case  "layananparukusta": include "script/layananparukusta.php";break;
		case  "layananmtbs": include "script/layananmtbs.php";break;
		case  "layananmtbsbaru": include "script/layananmtbsbaru.php";break;
		case  "layananparukustabaru": include "script/layananparukustabaru.php";break;
		case  "layananumumbaru": include "script/layananumumbaru.php";break;
		case  "layanankiabaru": include "script/layanankiabaru.php";break;
		case  "layanangigibaru": include "script/layanangigibaru.php";break;
		case  "layananlabbaru": include "script/layananlabbaru.php";break;
		case  "layananrawatinapbaru": include "script/layananrawatinapbaru.php";break;
		case  "layananugdbaru": include "script/layananugdbaru.php";break;
		default : include "script/homelayanan.php";break;
	}
?>
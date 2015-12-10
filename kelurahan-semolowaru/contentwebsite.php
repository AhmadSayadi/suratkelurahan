<?php
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	$kejaksaanq= $_GET['kelurahan'];
	switch ($kejaksaanq) 
	{
		//Utama
		case  "detailberita": include "script/detailberita.php";break;
		case  "profil": include "script/profil.php";break;
		case  "visimisi": include "script/visimisi.php";break;
		case  "berita": include "script/berita.php";break;
		case  "galery": include "script/galery.php";break;
		case  "struktur": include "script/struktur.php";break;
		case  "bukutamu": include "script/bukutamu.php";break;
		case  "konsultasi": include "script/konsultasi.php";break;
		case  "isipengaduan": include "script/isipengaduan.php";break;
		case  "grafikpengunjung": include "script/grafikpengunjung.php";break;
		case  "sambutan": include "script/sambutan.php";break;
		default : include "script/home.php";break;
	}
?>
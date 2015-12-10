<?php 
	session_start();
include "../koneksi.php";	
	//cek apakah user sudah login 
	if(!isset($_SESSION['username'])){ 
	?><script language='javascript'>alert('Anda belum login. Silahkan login dulu');
document.location='../index.php'</script><?
	    //jika belum login jangan lanjut.. 
	} 
?>
<html>
<head>
<title>Sistem Informasi Puskesmas</title>
<link rel="stylesheet" type="text/css" href="../style.css" />
</head>

<body>

   <!-- Begin Wrapper -->
  <div id="wrapper">
   
         <!-- Begin Header -->
         <div id="header"></div>
		 <!-- End Header -->
		 <div id="menu">
		 <div class="menu">
		 <font size='6' color='white'><marquee>Sistem Informasi Puskesmas Kamal, Bangkalan</marquee></font>
		 </div>
		 </div>
		  
		 <!-- Begin left Column -->

		 <div id="leftcolumn">
		 </br></br>
		<img src='../image/kiri2.png'></img><br><br></br>
        <div id="tombol">
		<div class="tombol">
		<la><a href='pasien.php'>HOME</a></la>
		</div>
		</div>
		<div id="tombol">
		<div class="tombol">
		<la><a href='../logout.php'>LOG OUT</a></la>
		</div>
		</div>
		<br><br><br><br><br><br><br><br></br>
		<?php 
			include "calender.php"; 
		?>
		
		</div>
         
		 <!-- End left Column -->
		 
		 <!-- Begin right Column -->

		 <div id="rightcolumn">
		 <br/><br/>
			<form name="form1" method="post" action="hasilcarirujuk.php">  
			PENCARIAN DATA RUJUKAN<br>
			<select name="kolom">
			<option value="nama">Nama Pasien</option>
			<option value="nama_kk">Nama KK</option>
			<option value="id">ID</option>
			<option value="alamat">ALamat</option>
			</select>
			<input type="text" name="cari" id="cari"/>
			<input type="submit" value="CARI"/>  
			</form>	
		<br><br>
		 <font size='4'><h2>DATA RUJUKAN</h2></font>
	    
				  <table align='center' border="1">
        <tr align='center'>
          <td width="3%">No</td>
		  <td width="5%">ID</td>
		  <td width="15%">NAMA PASIEN</td>
		  <td width="3%">JK</td>
		  <td width="5%">UMUR</td>
		  <td width="5%">NAMA KK</td>
		  <td width="10%">TGL RUJUKAN</td>
		  <td width="7%">ALAMAT</td>
		  <td width="7%">DIAGNOSA</td>
		  <td width="5%">KET</td>
		  <td width="10%">RSUD</td>
		  <td width="10%">KOTA</td>
		  
		<?php
				$hal = $_GET[hal];
				if(!isset($_GET['hal'])){ 
					$page = 1; 
				}
				else{
					$page = $_GET['hal']; 
				} 
				$max_results = 15; 
				$from = (($page * $max_results) - $max_results);
		
				$tampil=mysql_query("select * from rujukan LIMIT $from, $max_results");
				$no=$from;
				while ($baris=mysql_fetch_array($tampil)){
					$no++;
					echo  "<tr align=\"center\"align=\"middle\">
	<td>$baris[no]</td>
	<td><a href=detailrujuk.php?id=".$baris["no"]." target='_blank'>$baris[id]</a></td>
	<td>$baris[nama]</td>
	<td>$baris[jenis_kelamin]</td>
	<td>$baris[umur]</td>
	<td>$baris[nama_kk]</td>
	<td>$baris[tgl_rujukan]</td>
	<td>$baris[alamat]</td>
	<td>$baris[diagnosa]</td>
	<td>$baris[ket]</td>
	<td>$baris[rsud]</td>
	<td>$baris[kota]</td>
	</tr>";
}
					  
		?>	
		</tr> 
		</table>
		 <div align="center" style="font-size:12px; font-weight:bold;">
		<?php
		$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM rujukan"),0); 
		$total_pages = ceil($total_results / $max_results); 
		if($hal > 1){
			$prev = ($page - 1); 
    		echo "<a href=?page=data&hal=$prev><< Previous </a> "; 
		} 
		for($i = 1; $i <= $total_pages; $i++){ 
    		if(($hal) == $i){ 
       			echo "$i "; 
       		}
			else{ 
           		echo "<a href=?page=data&hal=$i>$i</a> "; 
    		} 
		} 
		//Buat Next Link 
		if($hal < $total_pages){ 
    		$next = ($page + 1); 
    		echo "<a href=?page=data&hal=$next>Next >></a>"; 
		} 
		?>
	</div>
		</div>
         
		 <!-- End right Column -->
		 
		
		 <!-- Begin Footer -->
		 <div id="footer"></div>
		 <!-- End Footer -->
		 
   </div>
   <!-- End Wrapper -->
</body>
</html>

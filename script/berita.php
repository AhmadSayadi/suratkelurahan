
		 <div id="rightcolumn">
		 <div align="center" id="leftPango1"><span class="title">BERITA</span></div>
<br/>
	 
		<?php
$opt=$_GET['opt'];
if (!empty ($opt))
{
	if ($opt=berhasil)
	{
	echo "<span class='berhasil'>!! Pesan Anda akan dimoderate terlebih dahulu oleh Admin !!</span><br>";
	}
}
include "koneksi.php";
$hal = $_GET[hal];
$max_results = 1;
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM berita"),0);
if(!isset($_GET['hal'])){
    $page = 1;
	$no=$total_results;
} else {
    $page = $_GET['hal'];
	$no=$total_results-($max_results * ($page-1));
}

$from = (($page * $max_results) - $max_results); 

$sql = mysql_query("SELECT * FROM berita ORDER BY idberita DESC LIMIT $from, $max_results ");

while($row = mysql_fetch_array($sql)){

?>

<table style="text-align:justify;width:100%; background-color:#f0f0f0; border:1px solid #000099; padding:8px;" width="100%" border="0" cellspacing="1" cellpadding="2">
   <tr>
    <td width="450" ><b><h2><? echo $row['judul'] ?></h2></b></td>
  </tr>
  <tr>
  <td  align="right">Bangkalan, <? $bulan_long=array('Januari','Februari','Maret','April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'Nopember', 'Desember');
								$tgl_temp=explode("-",$row['tanggal']); 
						$tgl=$tgl_temp[2];
						$bln=$bulan_long[$tgl_temp[1]-1]; 
						$thn=$tgl_temp[0]; 		
						echo " "; echo $tgl ; echo " "; echo $bln; echo " ";echo $thn;echo " "; ?></td>
      </tr>
 
 <tr>
 
    <td width="450" align="center" ><a href="foto/<? echo $row[3] ?>" class="pirobox"><p align="justify" ><img  style="float:left; margin:0 8px 4px 0;" width="250" height="250" src="foto/<? echo $row[3] ?>"></a><? echo $row[1] ?></p></td>
  </tr>

 
</table><br>
<?php
$no-=1;
}


$total_pages = ceil($total_results / $max_results);

if($hal > 1){
    $prev = ($page - 1);
    echo "<a href=index.php?kelurahan=berita&hal=$prev> <-Previous </a> ";
}
for($i = 1; $i <= $total_pages; $i++){
    if(($hal) == $i){
        echo "$i ";
        } else {
            echo "<a href=index.php?kelurahan=berita&hal=$i>$i</a> ";
    }
}
// Build Next Link
if($hal < $total_pages){
    $next = ($page + 1);
    echo "<a href=index.php?kelurahan=berita&hal=$next>Next-></a>";
	
}
?>

   </div>

   <!-- End Wrapper -->
</body>
</html>                             
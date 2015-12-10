<?php include "koneksi.php" ?>
<html>
<head>
<style type="text/css">
<!--
.no {
	font-size: 36px;
	font-weight: bold;
}
.berhasil {
	font-size: 24px;
	font-weight: bold;
	}	
-->
</style>
</head>
<body>
<div id="leftPango1" align="center"><span  class="title">BUKU TAMU</span></div>
<br/>
<h2>Buku Tamu</h2>
<center>
<?php
$opt=$_GET['opt'];
if (!empty ($opt))
{
	if ($opt=berhasil)
	{
	echo "<span class='berhasil'>!! Pesan Anda akan dimoderate terlebih dahulu oleh Admin !!</span><br>";
	}
}

$hal = $_GET[hal];
$max_results = 5;
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM bukutamu WHERE status='yes'"),0);
if(!isset($_GET['hal'])){
    $page = 1;
	$no=$total_results;
} else {
    $page = $_GET['hal'];
	$no=$total_results-($max_results * ($page-1));
}

$from = (($page * $max_results) - $max_results); 

$sql = mysql_query("SELECT * FROM bukutamu WHERE status='yes' ORDER BY id DESC LIMIT $from, $max_results ");

while($row = mysql_fetch_array($sql)){

?>

<table width="600" border="1" cellspacing="1" cellpadding="2">
  <tr>
    <td width="150" rowspan="3" valign="top"><table width="150" border="0">
      <tr>
        <td align="center"><span class="no"><? echo $no ?></span></td>
      </tr>
      <tr>
        <td align="center"><? echo $row[4] ?></td>
      </tr>
    </table></td>
    <td width="450"><img src="gambar/icon.png" width="20" height="20">&nbsp;<? echo $row[1] ?></td>
  </tr>
  <tr>
    <td width="450"><? $psn = str_replace("\n","<br>",$row[3]); echo $psn; ?></td>
  </tr>
  <tr>
    <td width="450"><? echo $row[2] ?></td>
  </tr>
</table><br>
<?php
$no-=1;
}


$total_pages = ceil($total_results / $max_results);

if($hal > 1){
    $prev = ($page - 1);
    echo "<a href=index.php?kelurahan=bukutamu&hal=$prev> <-Previous </a> ";
}
for($i = 1; $i <= $total_pages; $i++){
    if(($hal) == $i){
        echo "$i ";
        } else {
            echo "<a href=index.php?kelurahan=bukutamu&hal=$i>$i</a> ";
    }
}
// Build Next Link
if($hal < $total_pages){
    $next = ($page + 1);
    echo "<a href=index.php?kelurahan=bukutamu&hal=$next>Next-></a>";
	
}
?>
</center><br/><br/><?php
include "script/isibukutamu.php";
?>

</body>
</html>

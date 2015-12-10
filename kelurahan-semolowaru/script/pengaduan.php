<?php
session_start();
if(isset($_SESSION['username']))
{
	include "koneksi.php";
?>
<html>
<head>

</head>

<body>
<div align="center" id="leftPango1"><span class="title">PENGADUAN</span></div><br/>
<h2>PENGADUAN</h2>
<center>
<?
$hal = $_GET['hal'];
$max_results = 4;
$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM pengaduan"),0);
if(!isset($_GET['hal'])){
    $page = 1;
	$no=$total_results;
} else {
    $page = $_GET['hal'];
	$no=$total_results-($max_results * ($page-1));
}

$max_results = 4;

$from = (($page * $max_results) - $max_results); 

$sql = mysql_query("SELECT * FROM pengaduan ORDER BY id DESC LIMIT $from, $max_results ");
while($row = mysql_fetch_array($sql)){





?>
<table width="600" border="1" cellspacing="1" cellpadding="2">
  <tr>
    <td width="150" rowspan="3" valign="top"><table width="150" border="0">
      <tr>
        <td align="center"><span class="no"><? echo $no ?></span></td >
      </tr>
      <tr>
        <td align="center"><? echo $row[4] ?></td>
      </tr>
    </table></td>
    <td width="550"><? echo $row[1] ?></td><td rowspan="3"><a onClick="return confirm('Apakah Anda Yakin Untuk Menghapus Data Ini ?')" href='script/pengaduancek.php?opt=hapus&id=<?php echo $row['id'];?>'><img src="images/delete.png" width="50"><br/>Hapus</a>&nbsp;</td>
  </tr>
  <tr>
    <td width="450"><? $psn = str_replace("\n","<br>",$row[3]); echo $psn; ?></td>
  </tr>
  <tr>
    <td width="450"><? echo $row[2] ?></td>
  </tr>
  <tr></tr>
  </table>
<br>
<?php
$no-=1;
}

echo "<br><br>";

$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM pengaduan"),0);

$total_pages = ceil($total_results / $max_results);

echo "Select a Page<br />";

if($hal > 1){
    $prev = ($page - 1);
    echo "<a href=website.php?kelurahan=pengaduan&hal=$prev> <-Previous </a> ";
}
for($i = 1; $i <= $total_pages; $i++){
    if(($hal) == $i){
        echo "$i ";
        } else {
            echo "<a href=website.php?kelurahan=pengaduan&hal=$i>$i</a> ";
    }
}
// Build Next Link
if($hal < $total_pages){
    $next = ($page + 1);
    echo "<a href=website.php?kelurahan=pengaduan&hal=$next>Next-></a>";
	
}
?>
</center>
</body>
</html>
<? }
else
{
	header("location:logout.php");
}
?>
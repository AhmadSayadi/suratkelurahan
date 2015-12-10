<?php
include ("../jpgraph/src/jpgraph.php");
include ("../jpgraph/src/jpgraph_line.php");
include ("../jpgraph/src/jpgraph_bar.php");
include "../koneksi.php"; 
$dataJum = array();
$dataTh = array();
$tahun = $_POST['tahun'];



$query = "SELECT count(*) AS jumlah, monthname(tgl_periksa) as tahun FROM tb_cekdarah where year(tgl_periksa)='$tahun' group by month(tgl_periksa)";
$hasil = mysql_query($query);
while ($data = mysql_fetch_array($hasil))
{
	array_unshift($dataJum, $data['jumlah']);
	array_unshift($dataTh, $data['tahun']);
}

$graph = new Graph(500,300,"auto");
$graph->SetScale("textlin");

// menampilkan plot batang dari data 
$bplot = new BarPlot($dataJum);
$bplot->value->show();
$bplot->value->SetFormat("'%2.1f%%'");
$bplot->SetValuePos('max');
$graph->Add($bplot);

// menampilkan plot garis dari data 
$lineplot=new LinePlot($dataJum);
$graph->Add($lineplot);

$graph->SetFrame(true);
$graph->img->SetMargin(50,20,20,50);
$graph->title->Set("Grafik Jumlah Lab Cek Darah");
$graph->xaxis->title->Set("Bulan");
$graph->yaxis->title->Set("Jumlah");
$graph->xaxis->SetTickLabels($dataTh);

$graph->title->SetFont(FF_FONT1,FS_BOLD);

$lineplot->SetColor("red");
$bplot->SetFillColor("blue");

$graph->SetShadow();
$graph->Stroke();
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
		
        <!--- 0. untuk menipulasi tampilan table --->
        <link href="style-table.css" rel="stylesheet" type="text/css" media="screen" />
		
		<!-- 1. Add these JavaScript inclusions in the head of your page -->
		<script type="text/javascript" src="./js/jquery1.js"></script>
		<script type="text/javascript" src="./js/highcharts.js"></script>
		
		<!-- 1a) Optional: add a theme file -->
		<!--
			<script type="text/javascript" src="../js/themes/gray.js"></script>
		-->
		
		<!-- 1b) Optional: the exporting module -->
		<script type="text/javascript" src="./js/modules/exporting.js"></script>
		
		
		<!-- 2. Add the JavaScript to initialize the chart on document ready -->
		<script type="text/javascript">
		
			/**
			 * Visualize an HTML table using Highcharts. The top (horizontal) header 
			 * is used for series names, and the left (vertical) header is used 
			 * for category names. This function is based on jQuery.
			 * @param {Object} table The reference to the HTML table to visualize
			 * @param {Object} options Highcharts options
			 */
			Highcharts.visualize = function(table, options) {
				// the categories
				options.xAxis.categories = [];
				$('tbody th', table).each( function(i) {
					options.xAxis.categories.push(this.innerHTML);
				});
				
				// the data series
				options.series = [];
				$('tr', table).each( function(i) {
					var tr = this;
					$('th, td', tr).each( function(j) {
						if (j > 0) { // skip first column
							if (i == 0) { // get the name and init the series
								options.series[j - 1] = { 
									name: this.innerHTML,
									data: []
								};
							} else { // add values
								options.series[j - 1].data.push(parseFloat(this.innerHTML));
							}
						}
					});
				});
				
				var chart = new Highcharts.Chart(options);
			}
				
			// On document ready, call visualize on the datatable.
			$(document).ready(function() {			
				var table = document.getElementById('datatable'),
				options = {
					   chart: {
					      renderTo: 'container',
					      defaultSeriesType: 'column'
					   },
					   title: {
					      text: 'Diagram Presentase Obat                                                        '
					   },
					   xAxis: {
					   },
					   yAxis: {
					      title: {
					         text: 'Persentase Obat (%)'
					      }
					   },
					   tooltip: {
					      formatter: function() {
					         return '<b>'+ this.series.name +'</b><br/>'+
					            this.y +' '+ this.x.toLowerCase();
					      }
					   }
					};
				
			      					
				Highcharts.visualize(table, options);
			});
				
		</script>
		
	</head>
	<body>
 <div align="center" id="leftPango1"><span class="title">GRAFIK OBAT MASUK</span></div>
	<br/><div align="center" ><h2>Grafik Obat Masuk</h2></div>
		<div id="container" style="width: 625px; height: 400px; margin: 0 auto"></div>

        <?php
		include "koneksi.php";
		$query=mysql_query("select * from setting where jenissetting='Tanggal'  order by namasetting desc limit 0,4");
		
		?>
        <p>&nbsp;</p>
		<table id="datatable" class="datatable" width="100%" align="center">
		<thead>
        <tr>
            <th width="30%"><font size="2" color="blue">Tanggal</font></th>
          	<th width="35%"><font size="2" color="blue">Jumlah Obat</font></th>
         
         	</tr>
		</thead>
		<tbody>
            
            <?php
			while($row=mysql_fetch_array($query)){
				?>
				<tr>
					<th ><div align="left"><font size="2" color="black"><?php   
							$bulan_long=array('Januari','Februari','Maret','April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'Nopember', 'Desember');
					$tgl_temp=explode("-",$row['namasetting']); 
						$tgl=$tgl_temp[2];
						$bln=$bulan_long[$tgl_temp[1]-1]; 
						$thn=$tgl_temp[0]; 		
							echo " "; echo $tgl ; echo " "; echo $bln; echo " ";echo $thn;echo " ";
							?></font></div></th>
					<td align="center"><?php 
					$queryw=mysql_fetch_array(mysql_query("select sum(jumlah_masuk) from obat_masuk where tgl_masuk='$row[namasetting]'"));
					echo $queryw[0]*1;
					?></font></td>
		
                   				</tr>
                <?php
			}
			?>
            
		</tbody>
		</table>
		
			
</body>
</html>

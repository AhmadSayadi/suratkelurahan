

<?php
include "koneksi.php";

   $waktu3=date("Y-m-d");
$result = mysql_query("SELECT * FROM berita");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>DataTables</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <script src="media/js/jquery.js" type="text/javascript"></script>
        <script src="media/js/jquery.dataTables.js" type="text/javascript"></script>
        
        <style type="text/css">
            @import "media/css/demo_table_jui.css";
            @import "media/themes/smoothness/jquery-ui-1.8.4.custom.css";
        </style>
        
        <style>
            *{
                font-family: arial;
            }
        </style>
        <script type="text/javascript" charset="utf-8">
            $(document).ready(function(){
                $('#datatables').dataTable({
                    "sPaginationType":"full_numbers",
                    "aaSorting":[[0, "asc"]],
                    "bJQueryUI":true
                });
            })
            
        </script>
        
    </head>
    <body>
	
	<div><center>
	<br/>
 <div align="center" id="leftPango1"><span class="title">DAFTAR BERITA</span></div>
<br/>
</center>
 <font color="blue" ><h2>Daftar Berita</h2></font><br/>

	</div>
        <div>
            <table id="datatables" class="display">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Foto</th>
                        <th>Tanggal</th>
                        <th>Edit</th>
                        <th>Detail</th>
                        <th>Hapus</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
					$no=0;
                    while ($row = mysql_fetch_array($result)) {
                        
						?>
                        <tr valign="top">
							<td><?php echo $no=$no+1;?></td>
							<td><?php echo $row['judul'];?></td>
						    <td><img src="foto/<?php echo $row['file'];?>" width="100"/></td>
                            <td><?php 
$bulan_long=array('Januari','Februari','Maret','April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'Nopember', 'Desember');
$tgl_temp2=explode("-",$row['tanggal']); 
$tgl2=$tgl_temp2[2];
$bln2=$bulan_long[$tgl_temp2[1]-1]; 
$thn2=$tgl_temp2[0]; 					
echo $tgl2 ; echo " "; echo $bln2; echo " ";echo $thn2;

?></td>
                          
                            <td align="center"><a href="?kelurahan=editberita&idberita=<?php echo $row['idberita'];?>">
							
							<img src="images/edit.png" width="30">
							
							
							</a></td> <td align="center"><a href="?kelurahan=detailberita&idberita=<?php echo $row['idberita'];?>">
							
							<img src="images/report.png" width="30">
							
							
							</a></td>
                            <td align="center"><a onClick="return confirm('Apakah Anda Yakin Untuk Menghapus Data Ini ?')" 
							href="script/delberita.php?idberita=<?php echo $row['idberita'];?>">
							
							<img src="images/delete.png" width="30">
							
							
							</a></td>
							
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
		    </table>	
			<br/>
	
		</div>
		</body>
</html>

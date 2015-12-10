<?php
include "koneksi.php";

   $waktu3=date("Y-m-d");
$result = mysql_query("SELECT * FROM setting where jenissetting = 'Galery'");
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
	
	<div>
 <div align="center" id="leftPango1"><span class="title">DAFTAR GALERY</span></div>
	<br/><font color="blue" ><h2>Daftar Galery</h2></font><br/>

	</div>
        <div>
            <table id="datatables" class="display">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Keterangan</th>
						<th>Hapus</th>                        	
                    </tr>
                </thead>
                <tbody>
                    <?php
					$no=0;
                    while ($row = mysql_fetch_array($result)) {
                        ?>
                        <tr>
							<td><?php echo $no=$no+1;?></td>
							<td><img width="100" src="foto/<?php echo $row['namasetting'];?>"></td>
                            <td><?php echo $row['keterangan']
							?></td>
                          <td><a onClick="return confirm('Apakah Anda Yakin Untuk Menghapus Data Ini ?')" href="script/delgaleri.php?idsetting=<?php echo $row['idsetting']?>"><img width="50" src="images/delete.png"></a></td>
                             
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
		    </table>	

			</div>
		</body>
</html>



<?php
include "koneksi.php";

   $waktu3=date("Y-m-d");
$result = mysql_query("SELECT * FROM setting where jenissetting='Pangkat'");
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
    <body >

	<div><center>
 <div align="center" id="leftPango1"><span class="title">DAFTAR PANGKAT</span></div>
<br/>
 <font color="blue" ><h2>Daftar Pangkat </h2></font><br/>
</center>
	</div>
        <div>
            <table id="datatables" class="display">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pangkat</th>
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
							<td><?php echo $ii=$row['namasetting'];?></td>
                            
                                        <td align="center">
										
										<a onClick="return confirm('Apakah Anda Yakin Untuk Menghapus Data Ini ?')" 
							href="script/delpangkat.php?idsetting=<?php echo $row['idsetting'];?>">
							
							<img src="images/delete.png" width="30">
							
							
							</a>
							</td>
							
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

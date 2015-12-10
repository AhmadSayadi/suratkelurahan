

<?php
include "koneksi.php";

   $waktu3=date("Y-m-d");
$result = mysql_query("SELECT * FROM setting where jenissetting='status'");
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
                    "aaSorting":[[2, "desc"]],
                    "bJQueryUI":true
                });
            })
            
        </script>
        
    </head>
    <body >
	
	<div><center>
 <div align="center" id="leftPango1"><span class="title">DAFTAR STATUS</span></div>
<br/>
 <font color="blue" ><h2>Daftar Status </h2></font><br/>
</center>
	</div>
        <div>
            <table id="datatables" class="display">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Status</th>
                        <th>Biaya Status</th>
                        <th>Edit</th>
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
							<td><?php echo $row['namasetting'];?></td>
                            <td><?php echo $row['keterangan'];?></td>
                          
                            <td align="center"><a href="?puskesmas=editstatus&idsetting=<?php echo $row['idsetting'];?>">
							
							<img src="images/edit.png" width="30">
							
							
							</a></td>
                            <td align="center"><a onClick="return confirm('Apakah Anda Yakin Untuk Menghapus Data Ini ?')" 
							href="script/delstatus.php?idsetting=<?php echo $row['idsetting'];?>">
							
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

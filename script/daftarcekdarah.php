<?php
include "../koneksi.php":
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Cek Darah</title>
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
	<br/>
 <blink><h1>Daftar Cek Darah</h1></blink><br/><br/>
	</div>
        <div>
            <table id="datatables" class="display">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>alamat</th>
                        <th>tgl_periksa</th>
                        <th>operasi</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
					$no=0;
                    while ($row = mysql_fetch_array($result)) {
                        ?>
                        <tr>
							<td><?php echo $no=$no+1;?></td>
							<td><?php echo $row['id'];?></td>
                            <td><?php echo $row['nama'];?></td>
                            <td><?php echo $row['umur'];?></td>
                            <td><?php echo $row['alamat'];?></td>
                            <td><?php echo $row['tgl_periksa'];?></td>
                            <td><a href="detaildarah.php?id=<?php echo $row['no'];?>">Detail</a> | <a href="deldarah.php?id=<?php echo $row['no'];?>">Hapus</a> | <a href="editdarah.php?id=<?php echo $row['no'];?>">Edit</a></td>
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

<?php
include "koneksi.php";

   $waktu3=date("Y-m-d");
$result = mysql_query("SELECT * FROM t_ptugas");
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
 <div align="center" id="leftPango1"><span class="title">DAFTAR PEGAWAI</span></div>
<br/>
 <font color="blue" ><h2>Daftar Pegawai </h2></font><br/>
</center>
	</div>
        <div>
            <table id="datatables" class="display">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nip</th>
                        <th>Nama</th>
                        <th>Pangkat</th>
                        <th>Jabatan</th>
                        <th>Data Pegawai</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
					$no=0;
                    while ($row = mysql_fetch_array($result)) {
                        ?>
                        <tr>
							<td><?php echo $no=$no+1;?></td>
							<td><?php echo $row['nip'];?></td>
                            <td><?php echo $row['nama'];?></td>
                            <td><?php echo $row['pangkat'];?></td>
                            <td><?php echo $row['jabatan'];?></td>
                            <td align="center"><a href="?puskesmas=detailpegawai&idpegawai=<?php echo $row['idpegawai'];?>">
							<?php if($row["jeniskelamin"] == "pria"){
							
							?>
							<img src="images/pegawai.png" width="40">
							<?php 
							}else{
							?>
							<img src="images/pegawai.png" width="40">
							<?php
							}
							?>
							</a></td>
							
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
		    </table>	
			<br/>
<center>
			<a href="?puskesmas=tambahpegawai"><img src="images/pegawai.png" width="50"><br/>Tambah Pegawai</a>
</center>		
		</div>
		</body>
</html>

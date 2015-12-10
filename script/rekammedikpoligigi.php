<?php
include "koneksi.php";

   $waktu3=date("Y-m-d");
$result=mysql_query("select * from pasien order by norekammedik asc");
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
 <div align="center" id="leftPango1"><span class="title">DAFTAR PASIEN</span></div>
</center><br/>	<font color="blue" ><h2>Daftar Pasien </h2></font><br/>

	</div>
        <div>
            <table id="datatables" class="display">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Rekam Medis</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        
                        
  <th>Riwayat Pasien</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
					$no=0;
                    while ($row = mysql_fetch_array($result)) {
                        ?>
                        <tr>
							<td><?php echo $no=$no+1;?></td>
							<td><?php echo $row['norekammedik'];?></td>
                            <td><?php echo $row['namapasien'];?></td>
                            <td><?php echo $row['alamatpasien'];?></td>
                            <td align="center"><a href="?puskesmas=rekammedikpasiengigi&norekammedik=<?php echo $row['norekammedik'];?>">
							<?php if($row['jeniskelamin']="pria"){
							
							?>
							<img src="images/pasien2.png" width="40">
							<?php }else{
							?>
							<img src="images/pasien1.png" width="40">
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
			
			</div>
	
		</body>
</html>

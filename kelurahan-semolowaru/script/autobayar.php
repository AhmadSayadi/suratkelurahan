<?php
include "../koneksi.php";
$id = $_GET[id];
    $result = mysql_query("SELECT * FROM tb_transaksi");
    $rownew = 1;
    while ($row = mysql_fetch_array($result)) {
    $itempos = $row["no"];
    mysql_query("UPDATE tb_transaksi SET no = {$rownew} WHERE no={$itempos} LIMIT 1");
    $rownew++;
    }
    //reset auto increment
    mysql_query("ALTER TABLE tb_transaksi AUTO_INCREMENT = 1");
?><script language="JavaScript">document.location='bayar.php'</script><?
?>
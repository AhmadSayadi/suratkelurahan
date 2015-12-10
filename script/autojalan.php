<?php
include "../koneksi.php";
$id = $_GET[id];
    $result = mysql_query("SELECT * FROM rawat_jalan");
    $rownew = 1;
    while ($row = mysql_fetch_array($result)) {
    $itempos = $row["no"];
    mysql_query("UPDATE rawat_jalan SET no = {$rownew} WHERE no={$itempos} LIMIT 1");
    $rownew++;
    }
    //reset auto increment
    mysql_query("ALTER TABLE rawat_jalan AUTO_INCREMENT = 1");
?><script language="JavaScript">document.location='rawatjalan.php'</script><?
?>
<?php
include "../koneksi.php";
$id = $_GET[id];
    $result = mysql_query("SELECT * FROM t_kimiaklinik");
    $rownew = 1;
    while ($row = mysql_fetch_array($result)) {
    $itempos = $row["no"];
    mysql_query("UPDATE t_kimiaklinik SET no = {$rownew} WHERE no={$itempos} LIMIT 1");
    $rownew++;
    }
    //reset auto increment
    mysql_query("ALTER TABLE t_kimiaklinik AUTO_INCREMENT = 1");
?><script language="JavaScript">document.location='kimia.php'</script><?
?>
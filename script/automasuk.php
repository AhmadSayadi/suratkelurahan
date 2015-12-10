<?php
include "../koneksi.php";
$id = $_GET[id];
    $result = mysql_query("SELECT * FROM obat_masuk");
    $rownew = 1;
    while ($row = mysql_fetch_array($result)) {
    $itempos = $row["no"];
    mysql_query("UPDATE obat_masuk SET no = {$rownew} WHERE no={$itempos} LIMIT 1");
    $rownew++;
    }
    //reset auto increment
    mysql_query("ALTER TABLE obat_masuk AUTO_INCREMENT = 1");
?><script language="JavaScript">document.location='masuk.php'</script><?
?>
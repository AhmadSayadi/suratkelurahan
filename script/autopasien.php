<?php
include "../koneksi.php";
$id = $_GET[id];
    $result = mysql_query("SELECT * FROM pasien");
    $rownew = 1;
    while ($row = mysql_fetch_array($result)) {
    $itempos = $row["idpasien"];
    mysql_query("UPDATE pasien SET idpasien = {$rownew} WHERE idpasien={$itempos} LIMIT 1");
    $rownew++;
    }
    //reset auto increment
    mysql_query("ALTER TABLE pasien AUTO_INCREMENT = 1");
?><script language="JavaScript">document.location='loket.php?puskesmas=pasien'</script><?
?>
<html>
<head>
<title>Isi Buku Tamu</title>
</head>

<body>
<script type="text/javascript">
<!--
function isEmpty(inString) {
  var Empty = true;
  for (var i=0;i<inString.length;i++) {
    if ((inString.charAt(i) != ' ') &&
        (inString.charAt(i) != '\t') &&
        (inString.charAt(i) != '\r') &&
        (inString.charAt(i) != '\n')) {
      Empty = false;
    }
  }
  return Empty;
}

function check() {
  if(isEmpty(document.form.nama.value))  {
    alert('Nama belum diisi !');
    document.form.nama.focus();
    return false;
  }
if(isEmpty(document.form.email.value)) {
    alert('Email belum diisi !');
    document.form.email.focus();
    return false;
  }
  if(isEmpty(document.form.pesan.value)) {
    alert('Pesan belu diisi !');
    document.form.pesan.focus();
    return false;
  }
  return true;
}
//-->
</script>

<div align="center" id="leftPango1"><span class="title">FORM PENGADUAN</span></div>
<br/>
<h2>Form Pengaduan</h2>
<center>
<form name="form" action="script/simpanpengaduan.php" method="post" onSubmit="return check()">		
<table width="450" border="0" class="tabel">
  <tr>
    <td width="130">&nbsp;<span class="tulis">Nama</span></td>
    <td>&nbsp;<input type="text" name="nama" size=45 value="" class="isian"></td>
  </tr>
  <tr>
    <td width="130">&nbsp;<span class="tulis">Email</span></td>
    <td>&nbsp;<input type="text" name="email" size=45 value="" class="isian"></td>
  </tr>
  <tr>
    <td width="130">&nbsp;<span class="tulis">Pengaduan</span></td>
    <td>&nbsp;<textarea name="pesan" rows=5 cols=34 class="isian"></textarea></td>
  </tr>
  <tr>
    <td width="130">&nbsp;</td>
    <td>&nbsp;<input type="submit" value="Send"> <input type="reset" value="Reset"></td>
  </tr>
</table>
</form>

</center>
</body>
</html>

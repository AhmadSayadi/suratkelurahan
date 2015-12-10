<html>
<head>
</head>

<body>
<link rel="stylesheet" type="text/css" href="css/structure.css"><script type="text/javascript" src="./jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
	mode : "exact",
	elements : "elm2",
	theme : "advanced",
	skin : "o2k7",
	skin_variant : "silver",
	plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups",
	
	theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
	theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,|,insertdate,inserttime,preview,|,forecolor,backcolor",
	theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
	theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak",
	theme_advanced_toolbar_location : "top",
	theme_advanced_toolbar_align : "left",
	theme_advanced_statusbar_location : "bottom",
	theme_advanced_resizing : true,
	
	template_external_list_url : "lists/template_list.js",
	external_link_list_url : "lists/link_list.js",
	external_image_list_url : "lists/image_list.js",
	media_external_list_url : "lists/media_list.js",
	
	template_replace_values : {
		username : "Some User",
		staffid : "991234"
	}
	});
</script><script type="text/javascript">
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

<div align="center" id="leftPango1"><span class="title">FORM BERITA</span></div>
<br/>
<h2>Form Berita</h2>
<center>
<form enctype="multipart/form-data" action="script/simpanberita.php" method="POST" >		
<table width="450" border="0" class="tabel">
  <tr>
    <td width="130">&nbsp;<span class="tulis">Judul Berita</span><br/>
&nbsp;<input type="text" name="judul" size="35"  class="isian" required></td>
  </tr><tr>
    <td width="130">&nbsp;<span class="tulis">Foto</span><br/>
 &nbsp;<input type="file" name="file" id="file" size="20"  required></td>
  </tr>
  <tr>
    <td width="130">&nbsp;<span class="tulis">Isi Berita</span>
    <br/>&nbsp;<textarea style="width : 200px; height : 350px;" name="isi" id='elm2' class="isian" required></textarea></td>
  </tr>
  <tr>
    <td width="130">&nbsp;&nbsp;<input type="submit" value="Send"> <input type="reset" value="Reset"></td>
  </tr>
</table>
</form>

</center>
<?php include "daftarberitalengkap.php";?>
</body>
</html>

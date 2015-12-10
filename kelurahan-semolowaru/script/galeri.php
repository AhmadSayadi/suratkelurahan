<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://ee2erasd.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>
<script type="text/javascript">

$(document).ready(function() {		
	
	//Execute the slideeeWDSDF
	slideeeWDSDF();

});

function slideeeWDSDF() {

	//Set the opacity of all images to 0
	$('#ee2erasd a').css({opacity: 0.0});
	
	//Get the first image and display it (set it to full opacity)
	$('#ee2erasd a:first').css({opacity: 1.0});
	
	//Set the ss background to semi-transparent
	$('#ee2erasd .ss').css({opacity: 0.7});

	//Resize the width of the ss according to the image width
	$('#ee2erasd .ss').css({width: $('#ee2erasd a').find('img').css('width')});
	
	//Get the ss of the first image from REL attribute and display it
	$('#ee2erasd .content').html($('#ee2erasd a:first').find('img').attr('rel'))
	.animate({opacity: 0.7}, 400);
	
	//Call the ee2erasd function to run the slideeeWDSDF, 6000 = change to next image after 6 seconds
	setInterval('ee2erasd()',3500);
	
}

function ee2erasd() {
	
	//if no IMGs have the eeWDSDF class, grab the first image
	var current = ($('#ee2erasd a.eeWDSDF')?  $('#ee2erasd a.eeWDSDF') : $('#ee2erasd a:first'));

	//Get next image, if it reached the end of the slideeeWDSDF, rotate it back to the first image
	var next = ((current.next().length) ? ((current.next().hasClass('ss'))? $('#ee2erasd a:first') :current.next()) : $('#ee2erasd a:first'));	
	
	//Get next image ss
	var ss = next.find('img').attr('rel');	
	
	//Set the fade in effect for the next image, eeWDSDF class has higher z-index
	next.css({opacity: 0.0})
	.addClass('eeWDSDF')
	.animate({opacity: 1.0}, 1000);

	//Hide the current image
	current.animate({opacity: 0.0}, 1000)
	.removeClass('eeWDSDF');
	
	//Set the opacity to 0 and height to 1px
	$('#ee2erasd .ss').animate({opacity: 0.0}, { queue:false, duration:0 }).animate({height: '1px'}, { queue:true, duration:300 });	
	
	//Animate the ss, opacity to 0.7 and heigth to 100px, a slide up effect
	$('#ee2erasd .ss').animate({opacity: 0.7},100 ).animate({height: '50px'},500 );
	
	//Display the content
	$('#ee2erasd .content').html(ss);
	
	
}

</script>
<style type="text/css">
body{
	font-family:arial
}

.clear {
	clear:both
}

#ee2erasd {
	position:relative;
	height:370px
}
	#ee2erasd a {
		float:left;
		position:absolute;
	}
	
	#ee2erasd a img {
		border:none;
	}
	
	#ee2erasd a.eeWDSDF {
		z-index:500
	}

	#ee2erasd .ss {
		z-index:600; 
		background-color:#000; 
		color:#ffffff; 
		height:50px; 
		width:100%; 
		position:absolute;
		bottom:0;
	}

	#ee2erasd .ss .content {
		margin:5px
		
	}
	
	#ee2erasd .ss .content h4 {
		margin:0;
		
		padding:0;
		color:#F9FF94;
	}
	

</style>
</head>
<body >
 <div align="left" id="ee2erasd">
		<?php
			include "koneksi.php";
			$select=mysql_query("select * from setting where jenissetting = 'Galery' ORDER BY RAND()");
			while($row=mysql_fetch_array($select)){
					
				?>
	<a >
	<img  width="630" height="372" src="foto/<?php echo $row['namasetting'];?>" rel="<h4><?php echo $row['keterangan'];?></h4>"/>
           			
			
	</a>

	<?php			
			}
			?>
	<div class="ss"><div class="content"></div></div>
	<?php
	if($_SESSION['level'] == "website"){
	echo "<a>tambah</a>";
	}
	?>
</div>
</body>
</html>

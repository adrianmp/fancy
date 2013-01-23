<?php require("conexion.php"); ?>
<!DOCTYPE html
<html>
	<head>
		<title>FancyBox</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<link type="text/css" rel="stylesheet" href="fancy.css"/>
		<link type="text/css" rel="stylesheet" href="./style/jquery.fancybox-1.3.4.css"/>
		<script  type="text/javascript" src="jquery-1.4.3.min.js"></script>	
		<script type="text/javascript" src="./style/jquery.fancybox-1.3.4.pack.js"></script>			
		<script type="text/javascript" src="ajax.js"></script>			
		<script type="text/javascript" >
		$(document).ready(function()
		{
				$("#imagen1").fancybox();
				
				$("").fancybox({
				'width'				: '60%',
				'height'			: '75%',
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
				});
				
			});

		</script>			
	</head>
	<body>
		<div id="contenido">
			<a id="imagen1" href="imagenes/fo1.jpg" title="Gota de Agua :D">
			<img alt="Imagen" src="imagenes/fo1.jpg" width="100" height="100" /></a>
			<br/>
			<form>
				<?php include("select.php");?><br/>
			</form>	
		<div id="tabla"></div>			
		</div>		
	</body>
</html>

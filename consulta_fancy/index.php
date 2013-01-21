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
		<script type="text/javascript" src="jquery.js"></script>			
	</head>
	<body>
		<div id="contenido">
			<a id="imagen1" href="imagenes/fo1.jpg" title="Gota de Agua :D">
			<img alt="Imagen" src="imagenes/fo1.jpg"/></a>
			<br/>
			<form action="index.php" method="post">
				<?php include("select.php");?><br/>
				<input type="submit" name="enviar" value="agregar">
			</form>	
		<div id="tabla">
			<?php 
				if((isset($_POST['enviar'])))
				{
					
					$brand = $_POST["brand"];
					
					$sql = "SELECT product_clave_cva FROM products WHERE product_clave_cva <> '' AND product_brand = 1 ORDER BY product_clave_cva ASC";
					
					$catalogo_cva_sql = mysql_query($sql, $conexion);
					while($row = mysql_fetch_array($catalogo_cva_sql)){
						$catalogo_cva[] = $row['product_clave_cva'];
					}
					$sql = "SELECT product_name, product_clave_cva, grupo, marca, disponible, precio, moneda, product_id FROM new_products WHERE marca ='".$brand."'";
					$result = mysql_query($sql);

					echo "<table border = '0' align='center'>";
					echo "<tr align='justify'>";
					echo "<td><b>Nombre Producto</b></td>";
					echo "<td><b>Grupo</b></td>";
					echo "<td><b>Marca</b></td>";
					echo "<td align='center'><b>Disponible</b></td>";
					echo "<td align='center'><b>Precio</b></td> ";
					echo "<td align='center'><b>Moneda</b></td>";
					echo "<td align='center'><b>Status</b></td>";
					echo "</tr>";
					
					while ($row = mysql_fetch_row($result))
					{
						echo "<tr align='justify'>";
						echo "<td>$row[0]</td>";
						echo "<td>$row[2]</td>";
						echo "<td>$row[3]</td>";
						echo "<td align='center'>$row[4]</td>";
						echo "<td align='center' >$row[5]</td>";
						echo "<td align='center' >$row[6]</td>";
						//echo "<td>$row[1]</td>";
						if(in_array($row[1], $catalogo_cva , TRUE  ))
							echo '<td align="center"><img class="sku" src="stop.png" alt="Producto Repedito" width="12" height="12"></td>';
						else
							echo '<td align="center"><a id="varios3" href="formulario.php?product_id='.$row[7].'"><img class="sku" src="accept.png" alt="Producto Repedito"></a></td>';								
						echo "</tr>";
					}
					echo "</table>";
				}
			?>	

		</div>			
		</div>		
	</body>
</html>

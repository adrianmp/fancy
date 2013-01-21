<?php
	require("conexion.php");	
	$sql = "SELECT marca FROM new_products GROUP BY marca";
?>	
	<select name="brand">
		<option value="">Elegir Una Marca</option>
<?php 
	
	$result = mysql_query($sql);	
	while ($row = mysql_fetch_row($result))
	{
		//echo '<option value='.$row["marca"].'>'.$row["marca"].'</option>';
		echo "<option value=".$row[0].">".$row[0]."</option>";
	}
?>
	</select>

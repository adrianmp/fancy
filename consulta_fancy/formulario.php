<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<script type="text/javascript" src="jquery-1.8.2.min.js" ></script>
<script  type="text/javascript" src="jquery-1.4.3.min.js"></script>	
<script type="text/javascript" src="ajax.js"></script>	
<?php
	require("conexion.php");
	require_once("class.inputfilter.php");
	$ifilter = new InputFilter();
	$_GET = $ifilter->process($_GET);
	$brand = $_GET['product_id'];
	$sql = "SELECT * FROM new_products WHERE product_id =".$brand;
	$result = mysql_query($sql);		
	$row = mysql_fetch_row($result);
?>
	<form align="justify">
		<input type="hidden" name="product_id" id="product_id" value="<?php echo $row[0];?>"/>
		Producto Existente <input type="checkbox" id="checkbox" name="product_status" value="1" checked="checked"><br/>
		claves : IM:<input type="text" name="sku" size="12" value=""  id="sku"/> 
		CVA:<input type="text" name="cva" size="12" value="<?php echo $row[1];?>" id="cva" />
		CT:<input type="text" name="ctin" size="12" value=""  id="ctin"/><br/>
		Categoria: Marca: <input type="text" name="brand" id="brand" value="<?php echo $row[6];?>"/>
		Precio Normal: $ <input id="price_buy_mx_offer" name="price_buy_mx_offer" type="text" size="18" value="<?php echo $row[8];?>" class="required number offer"><br/>
		Precio Publico: $ <input id="price_mx" name="price_mx" type="text" size="18" value="" class="required number"><br/>
		Numero de Parte: <input id="pn" class="isrepeated" name="pn" type="text" size="30" value=""> 
		<strong>Stock</strong>: <input id="stock" name="stock" type="text" size="17" value="" /><br/>
		Nombre : <input type='text' name='name_product' value='<?php echo $row[2];?>' size='80' />
		<input type="submit" id="boton" name="submit" value="Agregar">
	</form>
	<button onclick="javascript:parent.jQuery.fancybox.close();">Cerrar / Cancelar</button>

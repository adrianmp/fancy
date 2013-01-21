<?php
	require("conexion.php");
	require_once("class.inputfilter.php");
	$ifilter = new InputFilter();
	$_POST = $ifilter->process($_POST);
	$brand =  $_POST['brand'];
	$sql = "DELETE FROM new_products WHERE product_id =".$brand;
	$result = mysql_query($sql);	
	echo $result;
?>

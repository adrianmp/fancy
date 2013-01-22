$(document).ready(function(){
	$("#boton").click(function() {
		var brand = $("#product_id").val();
		alert(brand);
			$.ajax
			({
				data: { "brand": brand },
				type:"POST",
				url:"procesar.php"
			});
	});
});

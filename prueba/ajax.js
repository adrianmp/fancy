$(document).ready(function(){
	
	$("#brand").change(function() {
		var brand = $("#brand").val();
		if(brand =="")
			$("#tabla").html("");
		else
		{
			$.post("datos.php", { brand: brand }, function(data) {
			  $('#tabla').append(data);
			});
		}		
	});
});

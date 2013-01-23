$(document).ready(function(){
	$("#brand").change(function() {
		var brand = $("#brand").val();
		if(brand =="")
			$("#tabla").html("");
		else
		{
			$.post("datos.php", { brand: brand }, function(data) {
			  $('#tabla').empty();
			  $('#tabla').append(data);
			  $("a").fancybox({
				'width'				: '60%',
				'height'			: '75%',
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe',
				'onClosed': function() 
				{ 
				   parent.location.reload(false); 
				} 
				});
			});
		}		
	});
});

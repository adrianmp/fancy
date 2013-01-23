$(document).ready(function()
{
		//window.location.href = "index.php"; //this is a possibility
		//window.location.reload(); //another possiblity
		//history.go(0); //and another
		$("#boton").click(function(){			
			var product_id = $("#product_id").val();
			if(product_id =="")
				$("#vacio").html("");
			else
			{
				$.post("procesar.php", { product_id: product_id }, function(){});
				parent.$.fancybox.close();
			}
		});
		$("#bc").click(function(){
			parent.$.fancybox.close();
		});
		$("#bcancel").click(function(){
			parent.$.fancybox.close();
		});
});
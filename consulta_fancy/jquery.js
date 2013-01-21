$(document).ready(function()
{
	$("#imagen1").fancybox();
	
	$("a").fancybox({
	'width'				: '60%',
	'height'			: '75%',
	'autoScale'			: true,
	'transitionIn'		: 'none',
	'transitionOut'		: 'none',
	'type'				: 'iframe'
	});
	
});

$(document).ready(function(){
	alturaDados();
});

$(window).on('resize', function(){
	alturaDados
});

function alturaDados(){
	$(".listaDadosLink .listaDados2").each(function(){
		var ele = $(this),
			altura = ele.height();
		ele.parent().find('.listaDados1 span, .listaDados3 span').css('line-height', altura+'px');
		ele.parent().find('.listaDadosIcone').css('margin-top', ((altura/2) - 9)+'px');
		
	});
}
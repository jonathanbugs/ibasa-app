var $window = $(window);
var windowHeight = $window.height();
var windowWidth = $window.width();


$(document).ready(function(){
	placeHolder();
});


function placeHolder(){
	$('.input, .textarea').on('keyup',function(){
		if($(this).val()===''){ $(this).prev().show(); }
	}).on('keydown',function(){
		$(this).prev().hide();
	}).on('change',function(){
		if ($(this).val()===''){ $(this).prev().show(); } else { $(this).prev().hide(); }
	}).on('focusout',function(){
		$(this).prev().fadeTo(0,1);
		if ($(this).val()===''){ $(this).prev().show(); $(this).parent().find('.erro').show(); } else { $(this).prev().hide(); $(this).parent().find('.erro').hide(); }
	}).on('focusin',function(){
		if ($(this).val()===''){ $(this).prev().show(); $(this).prev().fadeTo(0,0.3); } else { $(this).prev().hide(); }
	}).each(function(){
		if ($(this).val()===''){ $(this).prev().show(); } else { $(this).prev().hide(); }
	});
}
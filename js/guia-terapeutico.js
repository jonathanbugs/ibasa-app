$(document).ready(function(){
	selectMedicamentos();
});

$(window).on('resize', function(){
	selectMedicamentos();
});

function selectMedicamentos() {
	$(".listaMedicamentos select").chosen({
		"disable_search" : true,
		width: '100%'
	});
}
$('.colorpicker').colorpicker();

$('#mais-filtro').click(function(){
	
	div = $('#filtros').parent();
	$(div).append('<br /><input name="data[Tag][filtro][]" type="text" id="filtros">');
});

$('.alert').fadeIn(1000);
$('.alert').append('<a class="close">&times;</a>');
$('.close').click(function(){
	$(this).parent().fadeOut(500);
});

// Modificações do layout para o Bootstrap
$(document).ready(function(){

	$('fieldset .input').addClass('control-group');
	$('#page-content table').addClass('table table-bordered table-striped');

	/* Formata a paginação */
	$('.paging').addClass('btn-group');
	var nopaging = $('.paging').html().replace('</span> | <span','</span> <span');
	$('.paging').html(nopaging);
	$('.paging span').addClass('btn');

	/* Links desabilitados */
	$(".paging span.disabled:contains('<< anterior')").html('<i class="icon-arrow-left"></i> Anterior');
	$(".paging span.disabled:contains('próximo >>')").html('Próximo <i class="icon-arrow-right"></i>');

	/* Links de anteior e pŕoximo */
	var prevlink = $(".paging span a:contains('<< anterior')").attr('href');
	$(".paging span a:contains('<< anterior')").html('<i class="icon-arrow-left"></i> <a href="'+prevlink+'">Anterior</a>');
	var nextlink = $(".paging span a:contains('próximo >>')").attr('href');
	$(".paging span a:contains('próximo >>')").html('<a href="'+nextlink+'">Próximo</a> <i class="icon-arrow-right"></i>');

	/* Botões de ação */
	$(".actions a:contains('Delete')").addClass('btn btn-danger');
	$(".actions a:contains('Delete')").html('<i class="icon-trash icon-white"></i>');

	$(".actions a:contains('Edit')").addClass('btn btn-info');
	$(".actions a:contains('Edit')").html('<i class="icon-pencil icon-white"></i>');

	$(".actions a:contains('View')").hide();

	$('form').addClass('form-horizontal');
});
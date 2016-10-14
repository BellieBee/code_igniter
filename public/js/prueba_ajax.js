$(document).ready(function proajax(data){

	$('#enviar').click(function(e) {
		e.preventDefault();

		$.ajax({
			url: BASE_URL + 'welcome/listar_pokes',
			type: 'post',
			dataType: 'text',
			data: {
				"nombre" : $("[name = nombre]").val(),
				"grupo" : $("[name = grupo]").val(),
				"poke" : $("[name = poke]").val(),
			},
			success: function(informe)
			{
				$('#informe').html(informe);
			}
		})

	});

});
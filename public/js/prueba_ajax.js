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

	$('#sumar').click(function(e) {
		e.preventDefault();

		var num1 = $('#uno').val();
		var num2 = $('#dos').val();

		if(isNaN(num1) || isNaN(num2))
			alert('Primer y segundo número deben ser números');
		else 
		{
			$.ajax({
				url: BASE_URL + 'welcome/calsum',
				type: 'post',
				dataType: 'text',
				data: {
					num1 : num1,
					num2 : num2,
				},
				success: function(listo)
				{
					$('#listo').html(listo);
				}
			});
		}
	});

	$('#restar').click(function(e) {
		e.preventDefault();

		var num1 = $('#uno').val();
		var num2 = $('#dos').val();

		if(isNaN(num1) || isNaN(num2))
			alert('Primer y segundo número deben ser números');
		else 
		{
			$.ajax({
				url: BASE_URL + 'welcome/calrest',
				type: 'post',
				dataType: 'text',
				data: {
					num1 : num1,
					num2 : num2,
				},
				success: function(listo)
				{
					$('#listo').html(listo);
				}
			});
		}
	});

	$('#multi').click(function(e) {
		e.preventDefault();

		var num1 = $('#uno').val();
		var num2 = $('#dos').val();

		if(isNaN(num1) || isNaN(num2))
			alert('Primer y segundo número deben ser números');
		else 
		{
			$.ajax({
				url: BASE_URL + 'welcome/calmult',
				type: 'post',
				dataType: 'text',
				data: {
					num1 : num1,
					num2 : num2,
				},
				success: function(listo)
				{
					$('#listo').html(listo);
				}
			});
		}
	});

	$('#div').click(function(e) {
		e.preventDefault();

		var num1 = $('#uno').val();
		var num2 = $('#dos').val();

		if(isNaN(num1) || isNaN(num2))
			alert('Primer y segundo número deben ser números');
		else 
		{
			$.ajax({
				url: BASE_URL + 'welcome/caldiv',
				type: 'post',
				dataType: 'text',
				data: {
					num1 : num1,
					num2 : num2,
				},
				success: function(listo)
				{
					$('#listo').html(listo);
				}
			});
		}
	});

});
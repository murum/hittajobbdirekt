$(function() {
	$('#search-yrke').on('submit', function() {
		var form_data = $(this).serialize();
		var container = $('#response-modal .modal-body .yrken');
		$.ajax({
			url: '/json.php',
			method: 'post',
			data: form_data,
			dataType: 'json',
			success: function(data) {
				$(container).empty();
				$.each(data.soklista.sokdata, function(key, value) {
					$(container).append('<li class="yrke"><span class="yrke-namn">'+value.namn+'</span><span class="yrke-antal-jobb">Antal jobb: '+value.antal_platsannonser+'</span></li>')
				});
			}
		}).done(function() {
			$('#response-modal').modal('show');
		});
		return false;
	});
});
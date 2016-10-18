var search_term = $('#search_box').val();
		if(search_term == '') {
			$('#results').html('');
		} else {
			$.ajax({
			  type: 'POST',
			  url: 'search-customers-script.php',
			  data: 'search_term='+ search_term ,
			  success: function(data) {
				  $('#results').html(data);
			  }
			});
		}
		return false;


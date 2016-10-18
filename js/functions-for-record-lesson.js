function tickBoxes() {
	$('.mySubjects').each(function() {
		if( $.inArray( $(this).val(), subjectsAlreadyCovered) != -1 ) {
			// if the value of the input box happens to be in the subjectsAlreadyCovered array then check the box
			$(this).prop('checked', true);
			$(this).parent().css({'color':'green', 'text-decoration':'line-through'})
			// and add the value to another array called 'newSubjects' ready to resubmit when the page is submitted with all the lesson information. The newSubjects array is then sent to the sql database and will become the latest version of subjectsCovered 
			newSubjects.push($(this).val());
		} else {
			// otherwise uncheck the box
			$(this).prop('checked', false);
			$(this).parent().css({'color':'initial', 'text-decoration':'initial'})
			// and remove the item from the newSubjects array;
		};
	});//each
};

function loadSubjects() {
// when selecting a customer initialize an ajax call to check database for the value currently stored inth progress_report field
	$('#select_box').on('change', function() {
		// get customer id 
		var customer_id = $('#select_box option:selected').val();
		// reset newSubjects array for new customer as per selected
		newSubjects = [];
		// reset the subjectsAlreadyCovered array ready for ajax injection
		subjectsAlreadyCovered = []; 
		// call to the database to get the string from the progress_report field
			$.ajax({
					type: 'POST',
					url: '../php_scripts/get_customer_progress.php',
					data: 'customer_id=' + customer_id,
					
					success: function(subjects) {
						//an array is created from the ajax call to the database
						// take off the trailing +'s
						subjects = subjects.slice(1, -1);
						//console.log('after slice' + subjects)
					  // turn string into array
						var subsFromAjax = subjects.split('+');
						// loop through the array and push each element onto the subjectsAlreadyCovered array
						for(var i=0;i<subsFromAjax.length;i++) {
							subjectsAlreadyCovered.push(subsFromAjax[i]);
						};
						
						tickBoxes();
					} // success
			});// ajax call
		return false // 

	});// change
};// loadSubjects();

function getPrice() {
	$('#price_form').change(function() {
		var dur = $('#dur option:selected').val();
		var rat = $('#rat option:selected').val();
		var due_notice = $('input[type="radio"]:checked').val();
		
			if(due_notice == 'with_notice') {
				rat = '0';
				$('#comment').text('Lesson cancelled with +24hrs notice.');
			} 
			if(due_notice == 'without_notice') {
				$('#comment').text('Lesson cancelled at short notice.');
			}
		var price = dur * rat;
		price = price.toFixed(2);
	$('#payment').val(price);
	});
};
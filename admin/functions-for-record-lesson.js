function tickBoxes() {
	$('.mySubjects').each(function() {
		if( $.inArray( $(this).val(), subjectsAlreadyCovered) != -1 ) {
			// if the value of the input box happens to be in the subjectsAlreadyCovered array then check the box
			console.log($(this).val() + ' is in subjectsAlreadyCovered Array'); 
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
var mQ = [
	{ src: '../img/road_signs/national_speed_limit.png', alt: 'nat_speed', question: 'What is the speed limit for cars on Motorways?',
			answers: { answer1: '70mph', answer2: '60mph', answer3: '50mph', answer4: '40mph' }, correct: '70mph', explanation: ''
	}
];

function myMotorwayQuiz() {
	$('#question').html(mQ[i].question);
	
	$('#results img').attr('src', mQ.src);
	
		$('#answer1').html(mQ[i].answers.answer1);
		$('#answer1').next('td').find('input').val(mQ[i].answers.answer1);
		
		$('#answer2').html(mQ[i].answers.answer2);
		$('#answer2').next('td').find('input').val(mQ[i].answers.answer2);
		
		$('#answer3').html(mQ[i].answers.answer3)
		$('#answer3').next('td').find('input').val(mQ[i].answers.answer3);
		
		$('#answer4').html(mQ[i].answers.answer4);
		$('#answer4').next('td').find('input').val(mQ[i].answers.answer4);
	
	$('#submit').on('click', function() {
		var checked = $('input[type="radio"]:checked').val();
		var input = $('input[type="radio"]:checked');
	    if(checked == mQ.correct) { 
			$('#answer').html('Correct!'); 
			var mySpan = $(document.createElement('span')).addClass('tick');
			input.closest('td').prev('td').addClass('correct').append(mySpan); 
		} else {
			$('#answer').html('<span class="incorrect">Nope! That is not correct.</span>');
			var mySpan = $(document.createElement('span')).addClass('cross');
			input.closest('td').prev('td').addClass('incorrect').append(mySpan);
		};
		return false;
	});
}
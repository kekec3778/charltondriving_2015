var images = [

	{ src: '../img/road_signs/warning_level_crossing_barrier.png', alt: 'Level Crossing Sign', question: 'What does this warning sign mean?',  answers: { answer1 : 'Level Crossing With Barrier', answer2: 'Gated Road Ahead', answer3: 'Level Crossing Without Barrier', answer4: 'Cattle Grid'}, correct: 'Level Crossing With Barrier'},
	
	{ src: '../img/road_signs/no_vehicles.png', alt: 'No Vehicles', question: 'What does this sign mean?',  answers: {answer1 : 'This is not a real sign', answer2: 'Danger', answer3: 'No Reversing', answer4: 'No Vehicles'}, correct: 'No Vehicles'},
	
	{ src: '../img/road_signs/bus_lane_times.png', alt: 'Bus Lane Sign', question: 'When are you allowed to drive a car in this Bus Lane?',  answers: { answer1 : 'Never drive in Bus Lanes', answer2: '10.00am-4.00pm, 6.30pm-7.00am, all day at weekends', answer3: '7am-10am, 4.00pm-6.30pm, Not at all at weekends', answer4: 'Only in emergencies'}, correct: '10.00am-4.00pm, 6.30pm-7.00am, all day at weekends'},
	
	{ src: '../img/road_signs/circle_national_speed_limit.png', alt: 'Speed Limit', question: 'What is the speed limit for cars on Dual Carriageways where you see this sign?',  answers: { answer1 : '40mph', answer2: '50mph', answer3: '60mph', answer4: '70mph'}, correct: '70mph'},
	
	{ src: '../img/road_signs/no_cycling_150px.png', alt: 'Cycling', question: 'What does this sign mean?',  answers: { answer1 : 'Warning: Cyclists', answer2: 'Cycling is permitted', answer3: 'Cycling is not permitted', answer4: 'Cyclists have priority'}, correct: 'Cycling is not permitted'},
	
	{ src: '../img/road_signs/congestion_charge.png', alt: 'Congestion', question: 'What does this sign relate to?',  answers: { answer1 : 'Electrical Charging Points', answer2: 'The Low Emission Zone', answer3: 'The Congestion Charge Zone', answer4: 'The Cycle Superhighway'}, correct: 'The Congestion Charge Zone'},
	
	{ src: '../img/road_signs/toucan.png', alt: 'Toucan', question: 'Where would you find this sign displayed?',  answers: { answer1 : 'At a Puffin Crossing', answer2: 'At a Pelican Crossing', answer3: 'At a Toucan Crossing', answer4: 'At an Equestrian Crossing'}, correct: 'At a Toucan Crossing'},
	
	{ src: '../img/road_signs/give_way.png', alt: 'GW', question: 'What does this sign tell you to do?',  answers: { answer1 : 'Stop', answer2: 'Give Way Only to the Right', answer3: 'Give Way', answer4: 'Continue with Caution'}, correct: 'Give Way'},
	
	{ src: '../img/road_signs/waiting_restrictions.png', alt: 'GW', question: 'What does this sign mean?',  answers: { answer1 : 'Do not park here', answer2: 'Parking Restrictions between 8am and 6pm only', answer3: 'No Stopping', answer4: 'Stopping Restrictions between 8am and 6pm only'}, correct: 'Parking Restrictions between 8am and 6pm only'}
];

function myImageQuiz() {
	var rnd_num = Math.floor((Math.random() * images.length - 1)+1);
	var img = images[rnd_num];
	
	$('#question').html(img.question);
	
	$('#results img').attr('src', img.src);
	
		$('#answer1').html(img.answers.answer1);
		$('#answer1').next('td').find('input').val(img.answers.answer1);
		
		$('#answer2').html(img.answers.answer2);
		$('#answer2').next('td').find('input').val(img.answers.answer2);
		
		$('#answer3').html(img.answers.answer3)
		$('#answer3').next('td').find('input').val(img.answers.answer3);
		
		$('#answer4').html(img.answers.answer4);
		$('#answer4').next('td').find('input').val(img.answers.answer4);
		
		
	$('#submit').on('click', function() {
		var checked = $('input[type="radio"]:checked').val();
		var input = $('input[type="radio"]:checked');
	    if(checked == img.correct) { 
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
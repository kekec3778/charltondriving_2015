<?php 
session_start();
$title = 'Driving Quiz';
require_once '../includes/head.php';
require_once '../includes/js_and_css_links.php';
?>
<style>
#opening_page, .question {
	padding:10px;
	margin:10px;
}

button#start_quiz, input[type="submit"] {
	height:40px;
}

input[type="radio"] {
	width:20px;
	height:20px;
}
figure {
	margin-left:auto;
	margin-right:auto;
	width:300px;
	height:200px;
	text-align:center;
	margin-bottom:10px;
	padding:10px;
}
#error {
	color:red;
}
</style>
<?php
require_once '../includes/nav.php';
?>

<ol class="breadcrumb">
  <li><a href="../index.php">Home</a></li>
  <li>Quizzes</li>
  <li class="active">General Quiz</li>
</ol>
<div class="container">
  <div class="page-header"><h1>Quick Quiz</h1></div>
	<div class="questionCounter"></div>
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
	  <!--quiz-->
	  <!--opening page section-->
	  <section id="opening_page" class="bg-info clearfix">
			<p>You will be asked 10 questions. There is no time limit. Please click start when you are ready to begin. Your score will be awarded at the end of the quiz</p>
			<button id="start_quiz">Start Quiz</button>
	  </section><!--end opening page-->
		
		<!--question-->
		<section class="question bg-success" id="question_section">
			<h4 class="text-center" id="question_title"></h4>
			<figure id="question_image">
				<img>
			</figure>
			<form id="answers">
				<table class="table table-bordered text-center">
					<tr id="a1"><td></td><td><input name="answers" id="answer1" type="radio"></td></tr>
					<tr id="a2"><td></td><td><input name="answers" id="answer2" type="radio"></td></tr>
					<tr id="a3"><td></td><td><input name="answers" id="answer3" type="radio"></td></tr>
					<tr id="a4"><td></td><td><input name="answers" id="answer4" type="radio"></td></tr>
					<tr><td></td><td><input type="button" id="goto_next_question" value="Next Question"></td></tr>
				</table>
			</form>
			<p id="info"></p>
		</section>
		<!--end question-->
	  <!--end quiz-->
    </div><!--col-->
  </div><!--row-->
</div><!--container-->
  
</div>
  <div class="block"></div>
</div>
<script>
$(document).ready(function() {
	questionCounter = 0;
	score = 0;
	myAnswers = [];
	startQuiz();
	
	function startQuiz() {
		$('section.question').hide();
		$('#start_quiz').on('click', function() {
			$('section.question').show();
			$('section#opening_page').hide();
			nextQuestion(questionCounter);
		});
	}

	// function called when nextQuestion clicked
	function getAnswer() {
			// get checked element
			var myAnswer = $('#answers input:checked').val();
			// add it to array in appropriate index
			myAnswers.splice(questionCounter, 1, myAnswer);
			// store in local storage in case previous question is clicked
			sessionStorage.setItem('answer' + (questionCounter+1), myAnswer)
	}
	
	function keepScore() {
		if(myAnswers[questionCounter] == questions[questionCounter].correct_answer) {
			score++;
		}
	}
	
	$('#goto_next_question').on('click', function() {
		// if one of the radio boxes is checked
		if($('#answers input[type="radio"]:checked').length > 0) {
			// then...
			// get the answer from the checkbox
			getAnswer();
			
			// keep the score
			keepScore();
			
			// increment the question counter
			questionCounter++;
			
			// call function next question
			nextQuestion(questionCounter);
			
			// remove checks from radio buttons
				$('input').each(function() {
					$(this).attr('checked', false);
				});
				
				// remove error message
			$('#info').html('');
		} else {
			// show error message
			$('#info').html('* Please choose an answer');
		}
		
	});

	function nextQuestion(questionCounter) {
		//disable next button if at end of list
		if(questionCounter == questions.length) {
			$('#goto_next_question').attr('disabled', true);
			finalScore();
		}
		
		// if button clicked move to next question
		$('#question_title').html(questions[questionCounter].questionNumber + '. ' + questions[questionCounter].question);
		$('#question_image img').attr('src', questions[questionCounter].src);
		
		$('#a1 td:first').html(questions[questionCounter].answers.answer1);
		$('#a1').find('input').val(questions[questionCounter].answers.answer1);
		
		$('#a2 td:first').html(questions[questionCounter].answers.answer2);
		$('#a2').find('input').val(questions[questionCounter].answers.answer2);
		
		$('#a3 td:first').html(questions[questionCounter].answers.answer3);
		$('#a3').find('input').val(questions[questionCounter].answers.answer3);
		
		$('#a4 td:first').html(questions[questionCounter].answers.answer4);
		$('#a4').find('input').val(questions[questionCounter].answers.answer4);
		
	}
	
	
	function finalScore(){
		$('#info').html('You scored ' + score + ' out of ' + questions.length);
		$('#question_section').html('You scored ' + score + ' out of ' + questions.length);
	}
	
});

window.addEventListener('beforeunload', function(event) {
	event.returnValue = "Did you finish the quiz?"
});

</script>
<script>
// questions array of objects
var questions = [
	//object 0
	{	questionNumber: 1, question: 'In <strong>wet weather</strong> how many seconds gap should you leave between <em>your vehicle</em> and the vehicle <em>in front</em>?', src: '../img/road_signs/keep_two_chevrons_apart.png', alt: 'image one', answers: { answer1: 'At least 1 second', answer2: 'At least 2 seconds', answer3: 'At least 3 seconds', answer4: 'At least 4 seconds'}, correct_answer: 'At least 4 seconds'
	},
	// object 1
	{	questionNumber: 2, question: 'There are three traffic lanes. Unless signed otherwise, which lane should you approach this roundabout in, if you wanted to go towards Walsham?', src: '../img/road_signs/primary_roundabout.png', alt: 'Roundabout Sign', answers: { answer1: 'Any lane is fine', answer2: 'The left hand lane', answer3: 'The middle lane', answer4: 'The right hand lane'}, correct_answer: 'The right hand lane'},
	
	{	questionNumber: 3, question: 'You are driving behind a slow moving tractor. ', src: '../img/road_signs/tractor.png', alt: 'Farm Traffic', answers: { answer1: 'Keep well back to give yourself a good view of the road ahead', answer2: 'Overtake as soon as possible', answer3: 'Get really close so that you cannot see anything', answer4: 'Go for it!'}, correct_answer: 'Keep well back to give yourself a good view of the road ahead'
	}
];

</script>
<?php require_once '../includes/footer.php'; ?>
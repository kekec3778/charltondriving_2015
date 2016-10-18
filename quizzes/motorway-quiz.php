<?php 
session_start();
$title = 'Driving Lessons in Blackheath and Kidbrooke - London SE3';
require_once '../includes/head.php';
require_once '../includes/js_and_css_links.php';
?>
<style>
	.green {
		background:green;
	}
</style>
<?php
require_once '../includes/nav.php';
?>

<ol class="breadcrumb">
  <li><a href="../index.php">Home</a></li>
  <li>Quizzes</li>
  <li class="active">Motorways Quiz</li>
</ol>
<div class="container">
  <div class="page-header"><h1>Test your motorway knowledge</h1></div>
  <div class="row">
  
  <div class="col-md-6 col-md-offset-3">
	<div id="question">
		<table class="table table-bordered">
			<tr><td></td><td></td></tr>
		</table>
	</div>
	<div id="images" class="text-center bg-info">
		<img class="img-thumbnail img-margin">
	</div>
	
	<div id="answers">
		
		<form id="myForm">
			<table class="table table-bordered">
				<tr><td class="text-center" id="ans1"></td><td class="text-center"><input type="radio" name="answers" id="a1"></label></td></tr>
				<tr><td class="text-center" id="ans2"></td><td class="text-center"><input type="radio" name="answers" id="a2"></label></td></tr>
				<tr><td class="text-center" id="ans3"></td><td class="text-center"><input type="radio" name="answers" id="a3"></label></td></tr>
				<tr><td class="text-center" id="ans4"></td><td class="text-center"><input type="radio" name="answers" id="a4"></label></td></tr>
				<tr><td></td><td class="text-center"><input type="button" id="change_forward" value="Next Question"></td></tr>
			</table>
		</form>
		
		
		
	</div>
		
		<div id="current_score"></div>
	</div>
  </div>
  
	<div class="col-md-6">
	</div>
    
  </div>
  <div class="block"></div>
</div>
<script src="../js/motorways_quiz.js"></script>
<script>
$(document).ready(function() {
	var score = 0;
	var qNo = $('#question tr td:first-child');
	var q = $('#question tr td:eq(1)');
	var image = $('#images img');
	var next = $('#change_forward');
	var i=0;
	image.attr('src', images[i].src);
	qNo.html('Q' + images[i].questionNumber);
	q.html(images[i].question);
	
	$('#ans1').html(images[i].answers.answer1);
	$('#ans1').next('td').find('input').val(images[i].answers.answer1);
	$('#ans2').html(images[i].answers.answer2);
	$('#ans2').next('td').find('input').val(images[i].answers.answer2);
	$('#ans3').html(images[i].answers.answer3);
	$('#ans3').next('td').find('input').val(images[i].answers.answer3);
	$('#ans4').html(images[i].answers.answer4);
	$('#ans4').next('td').find('input').val(images[i].answers.answer4);
	
	$('#myForm').on('change', 'input', function() {
		var checked = $('#myForm input[type="radio"]:checked').val();
		var el = $('#myForm input[type="radio"]:checked');
		if(checked == images[i].correct_answer) {
			alert('correct');
		} else {
			alert('That is not correct');
		}
	});
	
	next.on('click', function() {
		i++;
		image.attr('src', images[i].src);
		q.html(images[i].question);
		
		$('#ans1').html(images[i].answers.answer1);
	$('#ans1').next('td').find('input').val(images[i].answers.answer1);
	$('#ans2').html(images[i].answers.answer2);
	$('#ans2').next('td').find('input').val(images[i].answers.answer2);
	$('#ans3').html(images[i].answers.answer3);
	$('#ans3').next('td').find('input').val(images[i].answers.answer3);
	$('#ans4').html(images[i].answers.answer4);
	$('#ans4').next('td').find('input').val(images[i].answers.answer4);
		
	});
	
	
});
</script>
<script>
var images = [
	{	questionNumber: 1, question: 'In <strong>wet weather</strong> how many seconds gap should you leave between <em>your vehicle</em> and the vehicle <em>in front</em>?', src: '../img/road_signs/keep_two_chevrons_apart.png', alt: 'image one', answers: { answer1: 'At least 1 second', answer2: 'At least 2 seconds', answer3: 'At least 3 seconds', answer4: 'At least 4 seconds'}, correct_answer: 'At least 4 seconds'
	},// object 1
	{	questionNumber: 2, question: 'What does this sign mean?', src: '../img/road_signs/leave_next_exit.png', alt: 'Motorway sign', answers: { answer1: 'Leave the Motorway at the next exit', answer2: 'Change into the next lane on the left', answer3: 'Pull over', answer4: 'Keep Left'}, correct_answer: 'Leave the Motorway at the next exit'
	},// object 2
	{	question: 'Why is this?', src: 'img/image_3.png', alt: 'image three', answers: { answer1: 'answer 1', answer2: 'answer 2', answer3: 'answer 3', answer4: 'answer 4'}
	}// object 3
];
</script>
<?php require_once '../includes/footer.php'; ?>
<?php 
session_start();
$title = 'Signs Quiz';
require_once '../php_scripts/connect.php';
require_once '../includes/head.php';
?>
<style>
	label {
		display:block;
		padding:4px;
		transition:all .5s ease-in !important;
	}
	input[type='radio'] {
		margin-right:10px;
	}
	input[type='submit'] {
		float:right;
		width:100px;
		height:40px;
		clear:left;
	}
	.wrapper {
		border:1px solid #eee;
		border-radius:5px;
		padding:20px;
		margin:10px;
	}
	h2 {
		text-align:center;
		margin-bottom:30px;
	}
	p.answer {
		display:inline-block;
		text-align:center;
		margin-left:24px;
		margin-top:10px;
		color:green;
	}
	.correct {
		color:green;
	}
	.incorrect {
		color:red;
	}
	
	span.tick, span.cross {
		background-repeat:no-repeat;
		display:inline-block;
		width:15px;
		height:15px;
		margin-left:5px;
	}
	span.tick {
		background:url('../img/tick.png');
		
	}
	span.cross {
		background:url('../img/cross.png');
	}
</style>
<?php 
require_once '../includes/nav.php';
?>
<ol class="breadcrumb">
  <li><a href="../index.php">Home</a></li>
  <li class="active">Signs Quiz</li>
</ol>
<div class="container">
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1">
		<h1>Road Signs Quiz</h1>
		<h4>What do the following signs mean?</h4>
		</div>
	</div>
	
	<br>
	
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1">
		
		<!-- question one -->
		
		<div class="row wrapper bg-success">
			<div class="col-sm-3 col-sm-offset-2">
				<div class="img-wrapper">
					<img class="img-responsive center-block" src="../img/road_signs/warning_end_of_dual_carriageway.png" alt="dual carriageway">
				</div>
					
			<br>
			</div>
			<div class="col-sm-5">
				<div class="question">
					<form id="q1">
					<label><input type="radio" value="End of dual carriageway" name="q1" data-answer="code1">End of dual carriageway</label>
					<label><input type="radio" value="a2" name="q1" data-answer="code2">Start of dual carriageway</label>
					<label><input type="radio" value="a3" name="q1">Wishbone ahead</label>
					<label><input type="radio" value="a4" name="q1" data-answer="code2">Contraflow system ahead</label>
					<input type="submit" value="Answer" id="submit" data-answer="code2">
					<p class="answer"></p>
					</form>
				</div>
			</div>
		</div>
		
		
		<!-- question two -->
		
		<div class="row wrapper bg-success">
			<div class="col-sm-3 col-sm-offset-2">
					<img class="img-responsive center-block" src="../img/road_signs/speed-for-trams.png" alt="tram drivers">
					
			<br>
			</div>
			<div class="col-sm-5">
				<div class="question">
					<form id="q2">
					<label><input type="radio" value="minimum speed" name="q1" data-answer="code2">Minimum speed limit</label>
					<label><input type="radio" value="a2" name="q1" data-answer="code1">Speed limit for tram drivers</label>
					<label><input type="radio" value="a3" name="q1" data-answer="code2">Maximum speed for dangerous vehicles</label>
					<label><input type="radio" value="a4" name="q1" data-answer="code2">Route for oversized vehicles</label>
					<input type="submit" value="Answer" id="submit">
					<p class="answer"></p>
					</form>
				</div>
			</div>
		</div>
		
		<!-- question two point five -->
		
		<div class="row wrapper bg-success">
			<div class="col-sm-3 col-sm-offset-2">
					<img class="img-responsive center-block" src="../img/road_signs/blue_one_way.png" alt="one way">
					
			<br>
			</div>
			<div class="col-sm-5">
				<div class="question">
					<form id="q2">
					<label><input type="radio" value="minimum speed" name="q1" data-answer="code2">Roundabout</label>
					<label><input type="radio" value="a2" name="q1" data-answer="code2">Straight ahead</label>
					<label><input type="radio" value="a3" name="q1" data-answer="code2">No U-turns</label>
					<label><input type="radio" value="a4" name="q1" data-answer="code1">One way street</label>
					<input type="submit" value="Answer" id="submit">
					<p class="answer"></p>
					</form>
				</div>
			</div>
		</div>
		
		
		
		<!-- question three -->
		
		<div class="row wrapper bg-success">
			<div class="col-sm-3 col-sm-offset-2">
					<img class="img-responsive center-block" src="../img/road_signs/no_vehicles.png" alt="no vehicles">
					
			<br>
			</div>
			<div class="col-sm-5">
				<div class="question">
					<form id="q2">
					<label><input type="radio" value="minimum speed" name="q1" data-answer="code2">No entry</label>
					<label><input type="radio" value="a2" name="q1" data-answer="code2">This is not an actual sign</label>
					<label><input type="radio" value="a3" name="q1" data-answer="code1">No Vehicles</label>
					<label><input type="radio" value="a4" name="q1" data-answer="code2">Go the other way</label>
					<input type="submit" value="Answer" id="submit">
					<p class="answer"></p>
					</form>
				</div>
			</div>
		</div>
		
		<!-- question four -->
		
		<div class="row wrapper bg-success">
			<div class="col-sm-3 col-sm-offset-2">
					<img class="img-responsive center-block" src="../img/road_signs/no_explosives.png" alt="no explosives">
					
			<br>
			</div>
			<div class="col-sm-5">
				<div class="question">
					<form id="q4">
					<label><input type="radio" value="minimum speed" name="q1" data-answer="code2">Do not reverse towards the tree</label>
					<label><input type="radio" value="a2" name="q1" data-answer="code2">Toxic cloud ahead</label>
					<label><input type="radio" value="a3" name="q1" data-answer="code1">No cars carrying explosives</label>
					<label><input type="radio" value="a4" name="q1" data-answer="code2">No smoking</label>
					<input type="submit" value="Answer" id="submit">
					<p class="answer"></p>
					</form>
				</div>
			</div>
		</div>
		
		<!-- question five -->
		
		<div class="row wrapper bg-success">
			<div class="col-sm-3 col-sm-offset-2">
					<img class="img-responsive center-block" src="../img/road_signs/level_crossing_countdown_2.png" alt="countdown to level crossing">
					
			<br>
			</div>
			<div class="col-sm-5">
				<div class="question">
					<form id="q4">
					<label><input type="radio" value="minimum speed" name="q1" data-answer="code1">Two hundred yards to level crossing</label>
					<label><input type="radio" value="a2" name="q1" data-answer="code2">Two hundred yards to military base</label>
					<label><input type="radio" value="a3" name="q1" data-answer="code2">Two hundred yards to hazard</label>
					<label><input type="radio" value="a4" name="q1" data-answer="code2">Two hundred yards to fire station</label>
					<input type="submit" value="Answer" id="submit">
					<p class="answer"></p>
					</form>
				</div>
			</div>
		</div>
		
		
		<!-- question six -->
		
		<div class="row wrapper bg-success">
			<div class="col-sm-3 col-sm-offset-2">
					<img class="img-responsive center-block" src="../img/road_signs/circle_national_speed_limit.png" alt="national speed limit">
					
			<br>
			</div>
			<div class="col-sm-5">
				<div class="question">
					<form id="q4">
					
					<label><input type="radio" value="a2" name="q1" data-answer="code2">No Stopping</label>
					<label><input type="radio" value="a3" name="q1" data-answer="code2">70mph maximum</label>
					<label><input type="radio" value="a4" name="q1" data-answer="code2">60mph maximum</label>
					<label><input type="radio" value="minimum speed" name="q1" data-answer="code1">The national speed limit applies</label>
					<input type="submit" value="Answer" id="submit">
					<p class="answer"></p>
					</form>
				</div>
			</div>
		</div>
		
		
		<!-- question six -->
		
		<div class="row wrapper bg-success">
			<div class="col-sm-3 col-sm-offset-2">
					<img class="img-responsive center-block" src="../img/road_signs/no_footway.png" alt="no footway">
					
			<br>
			</div>
			<div class="col-sm-5">
				<div class="question">
					<form id="q7">
					
					<label><input type="radio" value="a2" name="q1" data-answer="code2">Warning: pedestrian crossing</label>
					<label><input type="radio" value="minimum speed" name="q1" data-answer="code1">Watch out for pedestrians walking in the road</label>
					<label><input type="radio" value="a3" name="q1" data-answer="code2">Warning: School</label>
					<label><input type="radio" value="a4" name="q1" data-answer="code2">No pedestrians</label>
					<input type="submit" value="Answer" id="submit">
					<p class="answer"></p>
					</form>
				</div>
			</div>
		</div>
		
		<!-- question six -->
		
		<div class="row wrapper bg-success">
			<div class="col-sm-3 col-sm-offset-2">
					<img class="img-responsive center-block" src="../img/road_signs/no_pedestrians.png" alt="no pedestrians">
					
			<br>
			</div>
			<div class="col-sm-5">
				<div class="question">
					<form id="q8">
					
					<label><input type="radio" value="a2" name="q1" data-answer="code2">Warning: pedestrians walking along road</label>
					<label><input type="radio" value="minimum speed" name="q1" data-answer="code1">No pedestrians allowed</label>
					<label><input type="radio" value="a3" name="q1" data-answer="code2">Pedestrians go this way</label>
					<label><input type="radio" value="a4" name="q1" data-answer="code2">Watch out for pedestrians crossing</label>
					<input type="submit" value="Answer" id="submit">
					<p class="answer"></p>
					</form>
				</div>
			</div>
		</div>
		<script>
			$(document).ready(function() {
				$('form').submit(function() {
					
					$(this).find('.answer').text('');
					
					var ans = $(this).find('input[type="radio"]:checked').data('answer');
					
					if(ans === 'code1') { 
					
					var mySpan = $(document.createElement('span')).addClass('tick');
						
					$(this).find('input[type="radio"]:checked').closest('label').addClass('correct').append(mySpan);
					
					} 
					
					else if ($(this).find("input[type='radio']:checked").length == 0) { $(this).find('.answer').text('Please answer the question')
					
					} else {
						
						var mySpan = $(document.createElement('span')).addClass('cross');
						

						$(this).find('input[type="radio"]:checked').closest('label').addClass('incorrect').append(mySpan);
						
						$(this).find('.answer').text('Try again!');
						};
					return false;
				});
			});
		</script>
			
		</div>
	</div><!--row-->
	
	
</div>
<div class="block"></div>
<?php  require_once '../includes/footer.php'; ?>--
</body>
</html>
<?php //members home
	session_start();
	if(!isset($_SESSION['logged_in'])) {
		header('Location: ../index.php?ref_mem');
	} else {
		
		
$title = 'Emergency Stops';
		
		
require_once '../includes/head.php'; 
require_once '../includes/js_and_css_links.php';
require_once '../includes/nav.php';
?>

<ol class="breadcrumb">
  <li><a href="../index.php">Home</a></li>
  <li><a href="members-home.php">My Driving</a></li>
  <li><a href="lessons.php">Lesson Recaps</a></li>
  <li class="active">Emergency Stops</li>
</ol>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="page-header"><h1>Emergency Stops</h1></div>
			<p class="top-buffer20"></p>
			

			<div class="row top-buffer40"><!--nested row-->	
				<div class="col-xs-4">
				<figure id="figr-1">
				<img class="img-responsive center-block" src="../img/road_signs/mini_roundabout.png" alt="mini-roundabout">
				<script>
				$('#figr-1 img')
				.mouseover(function() {
				$(this).css('cursor','pointer');
				})
				.one('click', function() {
				$('#figr-1').append('<figcaption>Mini Roundabout</figcaption>');
				});
				</script>
				</figure>
				</div>
				
				<div class="col-xs-4">
				<figure id="figr-2">
				<img class="img-responsive center-block" src="../img/road_signs/warning_roundabout.png" alt="warning roundabout">
				<script>
				$('#figr-2 img')
				.mouseover(function() {
				$(this).css('cursor','pointer');
				})
				.one('click', function() {
				$('#figr-2').append('<figcaption>Warning! Roundabout</figcaption');
				});
				</script>
				</figure>
				</div>
				
				
				<div class="col-xs-4">
				<figure id="figr-4">
				<img src="../img/road_signs/give_way.png"  class="img-responsive center-block" alt="give way">
				</figure>
				<script>
				$('#figr-4 img')
				.mouseover(function() {
				$(this).css('cursor','pointer');
				})
				.one('click', function() {
				$('#figr-4').append('<figcaption>Give Way</figcaption');
				});
				</script>
				</div><!--nested column-->
			</div>	<!--nested row-->
		</div><!--column-->
	</div><!--row-->
	
	
		<div class="row">
			<div class="col-sm-6 top-buffer40">
			
			<div class="h-code clearfix">
				<h3>Stopping Distances</h3>
				
				<p>At <input type="text" id="mph" style="width:40px;"> mph your overall stopping distance will be: <span id="stopping_distance">x</span> feet or <span id="into_metres">y</span> metres.</p>
				<p>This is calculated using the formula "((mph / 20) + 1) * mph"</p>
				<script>
					$(document).ready(function() {
						
						var getStoppingDistanceInFeet = function(mph) {
								var osd = Math.floor(((mph / 20) + 1) * mph);
								return osd;
							};
							
						var feetIntoMetres = function(f) {
								var m = Math.round(f / 3.28084);
								return m;
						}
						
						$('#mph').on('keyup', function() {
							var mph = $(this).val();
							
							var x = getStoppingDistanceInFeet(mph);
						  $('#stopping_distance').html(x);
							
							var y = feetIntoMetres(x);
							$('#into_metres').html(y);
							
						});// end on keyp
						
					}); // end ready
				</script>
			</div>


			<div class="col-sm-6 top-buffer40">
				
				
			</div>
		</div>
	</div>

	<div class="block"></div>
<?php } require_once '../includes/footer.php'; ?>
</body>
</html>
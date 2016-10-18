<?php 
session_start();
$title = 'Road Signs';
require_once '../php_scripts/connect.php';
require_once '../includes/head.php';
require_once '../includes/nav.php';

?>
<ol class="breadcrumb">
  <li><a href="../index.php">Home</a></li>
  <li class="active">Road Signs</li>
</ol>
<div class="container">
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1">
		<h1>Road Signs</h1>
		<p>Here is a selection of road signs which people tend to misunderstand. Have a think, then click on them to find out what they mean.</p>
		</div>
	</div>
	
	<br>
	
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
		
			<figure class="pull-left">
				<img class="img-responsive" src="../img/road_signs/warning_end_of_dual_carriageway.png" alt="dual carriageway">
				<figcaption class="pull-left">
					Warning: End of dual carriageway
				</figcaption>
			</figure>
	
			<figure class="pull-left">
				<img src="../img/road_signs/level_crossing_countdown_3.png" alt="level_crossing_countdown">
				<figcaption class="pull-left">
					300 yards to level crossing
				</figcaption>
			</figure>
			
			<figure class="pull-left">
				<img src="../img/road_signs/shared-route.png" alt="shared route for cyclists and pedestrians">
				<figcaption class="pull-left">
					Shared route for cyclists and pedestrians
				</figcaption>
			</figure>
		
			<figure class="pull-left">
				<img src="../img/road_signs/circle_national_speed_limit.png" alt="dual carriageway">
				<figcaption class="pull-left">
					The national speed limit applies
				</figcaption>
			</figure>
			
			<figure class="pull-left">
				<img src="../img/road_signs/no_vehicles.png" alt="no vehicles">
				<figcaption class="pull-left">
					No vehicles
				</figcaption>
			</figure>
		
			
			<figure class="pull-left">
				<img src="../img/road_signs/warning_level_crossing_barrier.png" alt="dual carriageway">
				<figcaption class="pull-left">
					Warning: Level crossing with barrier
				</figcaption>
			</figure>
			
				<figure class="pull-left">
				<img src="../img/road_signs/speed-for-trams.png" alt="speed for trams">
				<figcaption class="pull-left">
					Speed limit for tram drivers
				</figcaption>
			</figure>
			
			<figure class="pull-left">
				<img src="../img/road_signs/no_stopping.png" alt="no stopping">
				<figcaption class="pull-left">
					No stopping
				</figcaption>
			</figure>
			
			<figure class="pull-left">
				<img src="../img/road_signs/blue_one_way.png" alt="dual carriageway">
				<figcaption class="pull-left">
					One way
				</figcaption>
			</figure>
	
			<figure class="pull-left">
				<img src="../img/road_signs/circle_no_cars.png" alt="dual carriageway">
				<figcaption class="pull-left">
					No cars allowed
				</figcaption>
			</figure>

			<figure class="pull-left">
				<img src="../img/road_signs/no_overtaking.png" alt="dual carriageway">
				<figcaption class="pull-left">
					No overtaking
				</figcaption>
			</figure>
		
			
			<figure class="pull-left">
				<img src="../img/road_signs/no_footway.png" alt="no footway">
				<figcaption class="pull-left">
					Warning: Pedestrians may be walking in the road
				</figcaption>
			</figure>
			

			<figure class="pull-left">
				<img src="../img/road_signs/give_way.png" alt="dual carriageway">
				<figcaption class="pull-left">
					Give way
				</figcaption>
			</figure>
			
			<figure class="pull-left">
				<img src="../img/road_signs/no_pedestrians.png" alt="no pedestrians">
				<figcaption class="pull-left">
					No pedestrians allowed
				</figcaption>
			</figure>
		
			<figure class="pull-left">
				<img src="../img/road_signs/route_for_bicycles_only.png" alt="route for bicycles only">
				<figcaption class="pull-left">
					Route for bicycles only
				</figcaption>
			</figure>
	
			<figure class="pull-left">
				<img src="../img/road_signs/no_explosives.png" alt="no Explosives">
				<figcaption class="pull-left">
					No vehicles carrying explosives
				</figcaption>
			</figure>

			<figure class="pull-left">
				<img src="../img/road_signs/minimum_speed.png" alt="minimum speed">
				<figcaption class="pull-left">
					Minimum speed limit
				</figcaption>
			</figure>
			
			<figure class="pull-left">
				<img src="../img/road_signs/warning_overhead_cables.png" alt="dual carriageway">
				<figcaption class="pull-left">
					Warning: Overhead cables
				</figcaption>
			</figure>
			
			<figure class="pull-left">
				<img src="../img/road_signs/pass-either-side.png" alt="pass either side to reach same destination">
				<figcaption class="pull-left">
					Pass either side to reach same destination
				</figcaption>
			</figure>
			
		
			
			
			
			<figure class="pull-left">
				<img src="../img/road_signs/t-junction.png" alt="dual carriageway">
				<figcaption class="pull-left">
					T-Junction (Junction on a Bend).
				</figcaption>
			</figure>
			
		</div>
	</div><!--row-->
	
	
</div>
<div class="block"></div>
<?php require_once '../includes/footer.php'; ?>
<script>
$(function() {
	$('figcaption').hide();
	$('figure').on('click', function() {
		$(this).find('figcaption').slideToggle();
	});
	
	if($(window).width() < 368) {
		$('figure').removeClass('pull-left').addClass('center-block');
	}
	
	$(window).resize(function() {
		if($(window).width() < 368) {
			$('figure').removeClass('pull-left').addClass('center-block');
		} 
		if($(window).width() > 368) {
			$('figure').removeClass('center-block').addClass('pull-left');
		}
	});
});
</script>
</body>
</html>
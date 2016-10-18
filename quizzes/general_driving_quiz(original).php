<?php 
session_start();
$title = 'NDS - Chislehurst | Driving Lessons in SE London & Kent';
?>
<!DOCTYPE html>

<html lang="en"  ng-app="generalQuiz">

<head>

<!--meta tags-->
<meta charset="utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="Driving Lessons and Driver Training in South East London & Kent">

<meta name="keywords" content="Driving, Driving Lessons, Lessons, Training, Tuition, Driving-Lessons, Driving Classes, Driving Test, Bromley, Chislehurst, Sidcup, Petts Wood, Eltham, New Eltham, Lee, Greenwich, Blackheath, Lewisham, Mottingham, Online lessons">

<meta name="author" content="Neil Cartwright">

<!-- copyright -->
<meta name="copyright" content="Neil Cartwright" />
<meta name="author" content="Neil Cartwright" />

<title><?php echo $title; ?></title>
<!-- favicon -->
<link rel="shortcut icon" type="image/x-icon" href="img/logos/favicon.ico">
<!--css-->
<link rel="stylesheet" type="text/css" href="../css/custom.css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

<!-- angular -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.1/angular-route.min.js"></script>

<!-- jquery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>


<!-- jquery UI -->
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />

<!-- bootstrap -->
<script src="../bootstrap/js/bootstrap.js"></script>

<style>
	#mylogo {
		-moz-transition: all 4s cubic-bezier(1,0,.07,.99) 1.5s;
		-o-transition: all 4s cubic-bezier(1,0,.07,.99) 1.5s;
		-webkit-transition: all 4s cubic-bezier(1,0,.07,.99) 1.5s;
		transition: all 4s cubic-bezier(1,0,.07,.99) 1.5s;
	}
	.animated {
		-moz-transform:rotateX(-3600deg);
		-ms-transform:rotateX(-3600deg);
		-o-transform:rotateX(-3600deg);
		-webkit-transform:rotateX(-3600deg);
		transform:rotateX(-3600deg);
	}
	  #map {
		height: 500px;
		margin-left:auto;
		margin-right:auto;
		margin-bottom:20px;
		border:1px solid #eee;
		border-radius:5px;
		padding:5px;
	  }
		.hide {
			display:none;
		}
		.show {
			display:inherit;
		}
</style>
<!-- logo animation -->
</head>
<body>

<!--nav-->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar "></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a id="brand-image" class="navbar-brand" href="#">
        <img  id="mylogo" src="../img/logos/logo_straight_xs.png" alt="Neil's Driving School">
      </a>
    </div>
    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
         <?php if(!isset($_SESSION['logged_in'])) { ?>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">General Info<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
			<li><a href="info/about_me.php">About Me</a></li>
			<li><a href="info/prices.php">Prices</a></li>
			<li><a href="info/book.php">Book a Lesson<span class="sr-only">(current)</span></a></li>
            </ul>
          </li>
		  <li class="divider"></li>
	<?php } ?> 
		  
		<!-- show members menu to logged in members-->
		<?php if(isset($_SESSION['logged_in'])) { ?>
		<li class="dropdown">
		<a href="members/members-home.php">My Driving</a>
		</li>
		<?php } ?>
		<?php if(isset($_SESSION['admin'])) { ?>
		<li>
		<a href="admin/admin.php">Admin</a>
		</li>
		<?php } ?>
		<?php if(!isset($_SESSION['logged_in'])) { ?>
		<li><a href="tel:07917042740">07917 042 740</a></li>
		<li><a href="mailto:neil@charltondriving.com">neil@charltondriving.com</a></li>
		<li><a href="info/login.php">Customer Login</a></li><?php } else { ?>
		<li><a href="php_scripts/logout.php">Logout</a></li><?php } ?>
	</ul>
    </div>
	</div>
</nav>

<ol class="breadcrumb">
  <li><a href="../index.php">Home</a></li>
  <li>Quizzes</li>
  <li class="active">General Quiz</li>
</ol>
<div>
</div>
<!-- ######################### angular quiz ##################### -->
<div class="row">

	<div class="col-sm-8 col-sm-offset-2">
		<div id="intro">
			<h2>General Driving Quiz</h2>
			<p>Please click <a href="#/Q1" ng-click="activeQuestion=0">here </a> to start the quiz</p>
		</div>
		<div>
			<div data-ng-view=""></div>
		</div>
	</div>
</div>


<div class="block"></div>
<?php require_once '../includes/footer.php'; ?>
<script>
$('#intro').on('click', function() {
	$(this).remove();
});
</script>
<script>
angular.module('generalQuiz', ['ngRoute']);

angular.module('generalQuiz').config([
  '$routeProvider', function($routeProvider) {
		$routeProvider
			.when('/Q1', {
				templateUrl:'quizQuestions/Q1.html',
				controller: 'quizController'
			})
			.when('/Q2', {
				templateUrl: 'quizQuestions/Q2.html',
				controller: 'quizController'
			}).
			when('/Q3', {
				templateUrl: 'quizQuestions/Q3.html',
				controller: 'quizController'
			})
			.otherwise('/', {
				templateUrl: '/',
				controller: 'quizController'
			});
	}
]);



angular.module('generalQuiz').controller('quizController', ['$scope','$http', function($scope, $http) {
	
	$scope.activeQuestion = -1;
	
	$http.get('quizQuestions/quizQuestions.json').then(function(quizQuestions) {
		$scope.questions = quizQuestions.data;
		$scope.totalQuestions = $scope.questions.length;
	});
	
}]);
</script>
</body>

</html>
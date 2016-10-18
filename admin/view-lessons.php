<?php 
session_start();
if(!isset($_SESSION['admin'])) {
	header('Location: ../index.php?via=admin');
}

$title = 'view lessons';
require_once '../php_scripts/connect.php';
require_once '../php_scripts/lessons_array.php';
require_once '../includes/head.php';
require_once '../includes/nav.php';

$surname = isset($_POST['surname']) ? $_POST['surname'] : null;
$this_month = isset($_POST['this_month']) ? $_POST['this_month'] : null;
$all_lessons = isset($_POST['all_records']) ? $_POST['all_records'] : null;


?>
<ol class="breadcrumb">
  <li><a href="../index.php">Home</a></li>
  <li><a href="admin.php">Admin</a></li>
  <li class="active">View Lessons</li>
</ol>


<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header"><h1>View Lessons</h1></div>
		
		<!-- create small form to filter results using AJAX-->
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="row"><!-- nested row -->
                        <div class="col-sm-4">
                                <label for="surname">Filter by Customer:&nbsp; </label><input type="text" name="surname" id="surname" style="width:100%;">
                        </div>
                    <br>
                        <div class="col-sm-8">
                                <input type="button" name="this_week" id="this_week" value="This Week">
                                <input type="button" name="this_month" id="this_month" value="This Month">
                                <input type="button" name="last_month" id="last_month" value="Last Month">
                                <input type="button" name="all_lessons" id="all_records" value="All Records">
                        </div>
                    </div><!-- nested row -->
		</form>
		<br>
        </div><!--col-->
    </div><!--row-->
    
    <div class="row">
        <div class="col-sm-12">
            <!-- results -->
		<div id="lesson_results">
		
		</div>
        </div>
    </div>
</div><!--container-->
<div class="block"></div>
<script>
    // use ajax to process the form 
    $(document).ready(function() {

            $('#surname').keyup(function() {
                    var surname = $('#surname').val();
                    if(surname == '') {
                            $('#lesson_results').html('');
                    } else {
                            $.ajax({
                                    type: 'POST',
                                    url: 'view-lessons-script.php',
                                    data: 'surname=' + surname,
                                    success: function(data) {
                                            $('#lesson_results').html(data);
                                    }
                            });// end ajax request
                    }
            });//end keyup

            $('#this_week').click(function() {

                    $.ajax({
                            type: 'POST',
                            url: 'get_week.php',
                            data: null,
                            success: function(data) {
                                    $('#lesson_results').html(data);
                            }
                    });
            });// end click

            $('#this_month').click(function() {
                    $.ajax({
                            type: 'POST',
                            url: 'get_month.php',
                            date: null,
                            success: function(data) {
                                    $('#lesson_results').html(data);
                            }
                    })
            }); // end month click


            $('#last_month').click(function() {
                    $.ajax({
                            type: 'POST',
                            url: 'get_last_month.php',
                            date: null,
                            success: function(data) {
                                    $('#lesson_results').html(data);
                            }
                    })
            }); // end last month click

            $('#all_records').click(function() {
                    $.ajax({
                            type: 'POST',
                            url: 'all_records.php',
                            data: null,
                            success: function(data) {
                                    $('#lesson_results').html(data);
                            }
                    });
            });// end all records click

    });
</script>

<?php require_once '../includes/footer.php'; ?>
</body>
</html>
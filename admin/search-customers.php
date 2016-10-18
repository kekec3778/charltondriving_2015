<?php 
session_start();
if(!isset($_SESSION['admin'])) {
	header('Location: ../index.php?via=admin');
}
$title = 'search customers';
require_once '../includes/head.php';
require_once '../includes/nav.php';

?>


<ol class="breadcrumb">
  <li><a href="../index.php">Home</a></li>
  <li><a href="admin.php">Admin</a></li>
  <li class="active">Search Customers</li>
</ol>

<div class="container">
    <div class="row">
        <div class="page-header"><h1>Search Customers</h1></div>
            <div class="col-sm-6">
                <form role="form" class="form">
                    <div class="form-group">
                    <label for="search_term">Search</label>
                    <input id="search_box" name="search_box" type="text" class="form-control" autofocus>
                    </div>
                    <input type="button" value="submit" class="btn btn-default">
                </form>
            </div>
            <br>
            <div class="col-sm-6">
                <div id="search_customer_results"><!--placeholder for ajax results--></div>
            </div>
    </div>
</div>
<div class="block"></div>
<?php require_once '../includes/footer.php'; ?>
<script>
$(document).ready(function() {
	$('#search_box').keyup(function() {
		var search_term = $('#search_box').val();
		if (search_term == '') {
			$('#search_customer_results').html('');
		} else {
			$.ajax({
			type: 'POST',
			url: 'search-customers-script.php',
			data: 'search_term='+ search_term,
			success: function(data) {
				$('#search_customer_results').html(data);
				}
			});
		}
		return false;
	});
});// end ready 
</script>
</body>
</html>
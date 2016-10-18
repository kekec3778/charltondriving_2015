<?php 

session_start();
if(!isset($_SESSION['admin'])) {
	header('Location: ../index.php?via=admin');
}
require_once '../php_scripts/connect.php';

$surname = isset($_POST['surname']) ? $_POST['surname'] : null;
$this_month = isset($_POST['this_month']) ? $_POST['this_month'] : null;
$all_lessons = isset($_POST['all']) ? $_POST['all'] : null;

$sql = "SELECT register.firstname, register.surname, register.id, lessons.date, lessons.lesson, lessons.payment, lessons.notes
	FROM register
	INNER JOIN lessons
	ON register.id=lessons.customer_id
	WHERE register.surname LIKE '%$surname%'
	ORDER BY lessons.date DESC";
	
$result = $mysqli->query($sql);
?>

<table class="table table-bordered">
			<thead>
				<tr>
				<th>Date</th>
				<th>Customer Name</th>
				<th>Lesson Subjects</th>
				<th>Payment</th>
				<th>Teacher Comments</th>
			</thead>
			<?php while($row = $result->fetch_assoc()) { ?>
			<tbody>
				<tr>
				<td>
				<?php 
				$lesson_date = $row['date'];
				$lesson_date = new DateTime($lesson_date);
				$format = 'l jS F Y';
				echo $lesson_date->format($format); ?></td>
				
				<td><a href="customer-record.php?id=<?php echo $row['id']; ?>"><?php echo $row['firstname'] . ' ' . $row['surname']; ?></a></td>
				<td><?php echo $row['lesson']; ?></td>
				<td><?php echo $row['payment']; ?></td>
				<td><?php echo $row['notes']; ?></td>
				</tr>
			</tbody>
			<?php } ?>
		</table>
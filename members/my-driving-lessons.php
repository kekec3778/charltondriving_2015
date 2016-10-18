<?php
//members home
session_start();
if (!isset($_SESSION['logged_in'])) {
    header('Location: ../index.php?ref_mem');
} else {


    $title = 'My Driving Lessons';

    require_once '../php_scripts/connect.php';
    require_once '../includes/head.php';
    require_once '../includes/nav.php';

    $id = $_SESSION['id'];
    ?>

    <ol class="breadcrumb">
        <li><a href="../index.php">Home</a></li>
        <li><a href="members-home.php">My Driving</a></li>
        <li class="active">My Driving Lessons</li>
    </ol>
    <div class="container">
        <div class="page-header"><h1>My Driving Lessons</h1></div>
        <div class="row">
            <div class="col-sm-12">
                <h4>Hello <?php echo ucfirst($_SESSION['name']); ?></h4>
                <p>From here you can view your driving lesson history.</P>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <?php
                            $sql = "SELECT MIN(date) FROM lessons WHERE customer_id='$id'";
                            $result = $mysqli->query($sql);
                            $row = $result->fetch_array();
                            ?>
                            <?php
                            $first_lesson_date = $row[0];
                            $first_lesson_date = new DateTime($first_lesson_date);
                            $format = 'l jS F, Y';
                            ?>
                            <td><span class="question">When was my first lesson?<br></span><span class="answer"><?php echo $first_lesson_date->format($format); ?></span></td>
                    <script>
                        $(function () {
                            $('.answer').hide()
                            $('.question').css({
                                'cursor': 'pointer',
                                'color': 'blue'
                            })
                            $('.question').click(function () {
                                $(this).next().toggle(1000);
                            });
                        });
                    </script>
                    <?php
                    $sql = "SELECT SUM(duration) FROM lessons WHERE customer_id='$id'";
                    $result = $mysqli->query($sql);
                    $row = $result->fetch_array();
                    ?>
                    <td><span class="question">How many hours of lessons have I had?<br></span><span class="answer"><?php echo $row[0] . ' hours'; ?></span></td>
                    <?php
                    $sql = "SELECT SUM(payment) FROM lessons WHERE customer_id='$id'";
                    $result = $mysqli->query($sql);
                    $row = $result->fetch_array();
                    ?>
                    <td><span class="question">How much have I spent?<br></span><span class="answer"><?php echo '&pound;' . number_format($row[0], 2); ?></span></td>
                    <?php
                    $sql = "SELECT COUNT(cancelled) FROM lessons WHERE customer_id='$id' AND (cancelled='with_notice' OR cancelled='without_notice')";
                    $result = $mysqli->query($sql);
                    $row = $result->fetch_array();
                    ?>
                    <td><span class="question">How many lessons have I cancelled?<br></span><span class="answer"><?php echo $row[0] . ' lessons'; ?></span></td>
                    </tr>
                    </tbody>
                </table>
                <p> Click on the subject of the lesson to be taken to a revision page.</p>
                <p>The more effort you put in between your lessons, the quicker you'll pass your driving test.</p>
                <table class="table table-hover table-bordered">
                    <?php
                    $sql = "SELECT * FROM lessons WHERE customer_id='$id' ORDER BY date DESC";
                    $result = $mysqli->query($sql);
                    ?>
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th class="dur">Duration</th>
                            <th class="payment">Payment</th>
                            <th class="pay_met">Payment Method</th>
                            <th>Homework topics, videos, downloads and web pages<br><small><span class="red">Caution: some are large files</span></small></th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php while ($row = $result->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php
                    $lesson_date = $row['date'];
                    $lesson_date = new DateTime($lesson_date);
                    $format = 'l jS F, Y';
                    echo $lesson_date->format($format);
                            ?></td>
                                <td class="dur"><?php echo $row['duration']; ?></td>
                                <td class="payment"><?php echo $row['payment']; ?></td>
                                <td class="pay_met"><?php echo $row['payment_method']; ?></td>
                                <td><?php
                                    $lesson = $row['lesson'];
                                    $lesson = explode("+", $lesson);
                                    foreach ($lesson AS $lessons) {
                                        ?>

                                        <a title="Get homework" href="<?php echo $lessons; ?>.php"><?php echo $lessons . '</a> - '; ?>

        <?php }; ?></td>

                            </tr>
    <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="block"></div>
    </div>

    <?php
} // end first else 
require_once '../includes/footer.php';
?>
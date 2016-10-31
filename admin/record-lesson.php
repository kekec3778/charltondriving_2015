<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: ../index.php?via=admin');
}

$title = 'Record a Driving Lesson';
require_once '../php_scripts/connect.php';
require_once '../php_scripts/lessons_array.php';
require_once '../php_scripts/essential_skills_array.php';
require_once '../php_scripts/roadcraft_array.php';
require_once '../php_scripts/pages_array.php';
require_once '../php_scripts/how_cars_work_array.php';
require_once '../php_scripts/videos_array.php';
require_once '../php_scripts/progress_array.php';
require_once '../includes/head.php';
require_once '../includes/nav.php';

// deal with add lesson form


if (isset($_POST['submit'])) {
// insert data into database
    $customer_id = isset($_POST['customer_id']) ? $_POST['customer_id'] : null;
    $date = isset($_POST['date']) ? $_POST['date'] : null;
    $duration = isset($_POST['duration']) ? $_POST['duration'] : null;
    $rate = isset($_POST['rate']) ? $_POST['rate'] : null;
    $payment = isset($_POST['payment_due']) ? $_POST['payment_due'] : null;
    $payment_method = isset($_POST['payment_method']) ? $_POST['payment_method'] : null;
    $cancelled = isset($_POST['optradio']) ? $_POST['optradio'] : 'not cancelled';

    if (!empty($_POST['progress'])) {
        $progress_report = $_POST['progress'];
// this is an array which will be concatenated with a + sign
        $progress_report = implode("+", $progress_report);
        $progress_report = '+' . $progress_report . '+';
    } else {
        $progress_report = null;
    };

    if (!empty($_POST['lesson'])) {
        $lesson = $_POST['lesson'];
        $lesson = implode("+", $lesson);
        $lesson = '+' . $lesson . '+';
    } else {
        $lesson = null;
    };


    $notes = isset($_POST['notes']) ? $_POST['notes'] : null;
    $sql = "INSERT INTO lessons	(customer_id, date, duration, rate, payment, payment_method, cancelled, lesson, progress_report, notes) VALUES ('$customer_id', '$date', '$duration', '$rate', '$payment', '$payment_method', '$cancelled', '$lesson','$progress_report', '$notes');";


    $result = $mysqli->query($sql);
    if ($result) {
        $lesson_update = true;

        // fix the date format //
        $date = new DateTime($date);
        $format = 'l jS F';
        $date = $date->format($format);

        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        // send email to customer to confirm homework has been set
        //firstly match email to customer id from option 
        $sql = "SELECT * FROM register WHERE id='$customer_id'";
        $result = $mysqli->query($sql);
        if ($result->num_rows == 1) {
            $record = $result->fetch_assoc();
            // there is only one result so that is good
            $email = $record['email'];
        } else {
            echo $customer_id;
        };

        if (!isset($_POST['optradio'])) { // only send the email if the lesson has not been cancelled 
            // now create a phpMailer object
            require_once '../php-mailer/PHPMailerAutoload.php';
            // add headers to the email

            $from = "neil@charltondriving.com";
            $headers = "From: {$from} \n";
            $headers .= "Reply-To: {$from}\n";
            $headers .= "X-Mailer: PHP/" . phpversion() . "\n";
            $headers .= "MIME-Version: 1.0\n";
            $headers .= "Content-type: text/html; charset=iso-8859-1";


            // who is the email to?
            $to_name = $record['firstname'] . ' ' . $record['surname'];
            // email address contained in form itself
            $to = $email;
            // who from?
            $from_name = 'Neil Cartwright';


            // subject heading
            $subject = 'Driving Lesson on ' . $date;

            // the email message itself
            $message = 'Hi ' . trim(ucfirst($record['firstname'])) . ',<br><br>';
            $message .= 'You can now review your driving lesson online at <a href="http://www.charltondriving.com/info/login.php">www.charltondriving.com</a>.<br><br>';
            $message .= 'On your dashboard go to \'My Driving Lessons\' - the records are kept there.<br><br>';
            $message .= 'From your dashboard you\'ll be able to view videos, chapters from books, and other links directly relating to your lessons<br><br>';
            $message .= 'It is best to <strong>recap just before your next driving lesson</strong>, <em>in order to get your brain in gear and fully benefit from the short amount of time you have in the car</em>.<br><br>';
            $message .= 'Thanks &amp; see you next time,<br><br>';
            $message .= 'Neil<br>';
            $message .= '<br><em>There is no need to reply to this message, but if you have any questions please email whenever you like</em>.<br>';
            $message .= '<br>NDS - Driver Training in SE London & Kent<br>';
            $message .= '07917 042 740<br>';
            $message .= '<a href="mailto:neil@charltondriving.com">neil@charltondriving.com</a><br>';
            $message .= '<a href="www.charltondriving.com">www.charltondriving.com</a><br>';
            $message .= '<a href="https://www.facebook.com/ndschislehurst/">Facebook.com/ndschislehurst</a>';
            $message .= '<br><br><em>Please</em> allow 24hrs for cancellations or time changes';
            // create the email object
            $mail = new PHPMailer(true); //true parameter sets Exception
            // try catch for Exception handling
            try {
                $mail->IsSMTP();
                $mail->IsHTML(true); // true for exception handling
                // local server $mail->Host = 'smtpout.secureserver.net';
                $mail->Host = 'relay-hosting.secureserver.net';

                //$mail->SMTPDebug = 3; // for debugging
                // local server $mail->Port = 80;
                $mail->Port = 25;
                // local server $mail->SMTPAuth = true;
                $mail->SMTPAuth = false;
                $mail->Username = 'neil@charltondriving.com';
                $mail->Password = 'godaAdmiral315';
                $mail->FromName = $from_name;
                $mail->From = $from;
                $mail->AddAddress($to, $to_name);
                $mail->Subject = $subject;
                $mail->Body = $message;
                $result_mail = $mail->Send();
            } catch (Exception $e) {
                echo $e->errorMessage();
            }
        } // end if lesson not cancelled
        /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    } // if lesson was updated
}; // if isset post submit
?>
<ol class="breadcrumb">
    <li><a href="../index.php">Home</a></li>
    <li><a href="admin.php">Admin</a></li>
    <li class="active">Record a Lesson</li>
</ol>


<!-- displays successful message when lesson has been added to records -->
<?php
$message = <<<HTML
	<div class="lesson_recorded bg-primary"><h4>Lesson Updated</h4>
	<p><a href="admin.php">Return to Admin</a></p>
	</div>
HTML;

if (isset($lesson_update)) {
    echo $message;
}
?>

<div class="container">
    <div class="row">
        <div class="page-header text-center"><h1>Record a Lesson</h1></div>
        <div class="col-sm-6">
            



            <!--form to record lesson -->
            <form id="price_form" action="record-lesson.php" method="POST" role="form">

                <div class="form-group">
                    <label for="name">Customer</label>


                    <select name="customer_id" id="select_box" class="form-control">
                        <!-- displays ALL customers -->
                        <option>--Please Select--</option>
<?php
$sql = "SELECT * FROM register WHERE has_passed = 0 ORDER BY firstname";
$result = $mysqli->query($sql);
while ($row = $result->fetch_assoc()) {
    ?>

                            <option class="subject_option" name="customer_id" id="customer" value="<?php echo $row['id']; ?>"><?php echo $row['firstname'] . ' ' . $row['surname']; ?></option>


                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="date">Date</label>
                    <input name="date" type="text" placeholder="YYYY-MM-DD" class="form-control" id="datepicker" required>
                </div>

                <div class="form-group">
                    <label for="duration">Duration</label>
                    <select name="duration" id="dur" class="form-control">
                        <option value="1">1hr</option>
                        <option value="1.5">90mins</option>
                        <option value="2">2hrs</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="rate">Rate</label>
                    <select name="rate" class="form-control" id="rat">
                        <option value="25">Daytime</option>
                        <option value="27">Evening/Weekend</option>
                        <option value="12.5">1st Lesson Daytime</option>
                        <option value="13.5">1st Lesson Evening/Weekend</option>
                        <option value="30">Motorway Lessons</option>
                    </select>
                </div>


                <hr>
                <div class="radio">
                    <label><input value="without_notice" type="radio" name="optradio">Cancelled at short notice</label>
                </div>
                <div class="radio">
                    <label><input id="due_notice_given" type="radio" name="optradio" value="with_notice">Cancelled with +24 hours notice</label>
                </div>
                <hr>

                <div class="form-group">
                    <label for="payment">Payment Due</label>
                    <input name="payment_due" class="form-control" type="text" value="<?php if (isset($_POST['payment_due'])) echo $_POST['payment_due']; ?>" id="payment" readonly>
                </div>

                <div class="form-group">
                    <label name="payment_method" for="payment-type">Payment Method</label>
                    <select name="payment_method" class="form-control">
                        <option value="cash">Cash</option>
                        <option value="cheque">Cheque</option>
                        <option value="internet">Internet Banking</option>
                        <option value="credit">Credit</option>
                        <option value="prepaid">Prepaid</option>
                        <option value="no-payment">No Payment</option>
                    </select>
                </div>
        </div>

        <div class="col-sm-6">
            <?php

            function startsWith($haystack, $needle) {
// search backwards starting from haystack length characters from the end
                return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== false;
            }
            ?>
            <!-- subjects covered -->
            <div class="panel panel-default">
                <div class="panel-heading subject-header">Lessons completed<span class="caret"></span></div>
                <div class="subject-body">
<?php foreach ($subject_list as $list_item) { ?>
                        <div class="checkbox">
                            <label>
    <?php if (!startsWith($list_item, "*")) { ?>
                                    <input class="mySubjects" id="subject" name="progress[]" type="checkbox" 
                                           value="<?php echo $list_item; ?>" 
                                           >
        <?php echo $list_item;
    } else { ?>
                                    <p style="font-weight:900;text-decoration:underline;"><?php echo substr($list_item, 1, -1);
    }; ?></p>
                            </label>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <!-- essential skills -->
            <div class="panel panel-default">
                <div class="panel-heading subject-header">Essential Skills<span class="caret"></span></div>
                <div class="subject-body">
                    <?php foreach ($es_chapters as $chapter) { ?>
                        <div class="checkbox">
                            <label><input id="lesson" name="lesson[]" type="checkbox" value="<?php echo $chapter; ?>"><?php echo ucwords($chapter); ?>
                            </label>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <!--roadcraft-->
            <div class="panel panel-default">
                <div class="panel-heading subject-header">RoadCraft<span class="caret"></span></div>
                <div class="subject-body">
                    <?php foreach ($rd_chapters as $chapter) { ?>
                        <div class="checkbox">
                            <label><input id="lesson" name="lesson[]" type="checkbox" value="<?php echo $chapter; ?>"><?php echo ucwords($chapter); ?>
                            </label>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <!--pages-->
            <div class="panel panel-default">
                <div class="panel-heading subject-header">Pages<span class="caret"></span></div>
                <div class="subject-body">
                    <?php foreach ($pages as $chapter) { ?>
                        <div class="checkbox">
                            <label><input id="lesson" name="lesson[]" type="checkbox" value="<?php echo $chapter; ?>"><?php echo ucwords($chapter); ?>
                            </label>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <!--how cars work-->
            <div class="panel panel-default">
                <div class="panel-heading subject-header">How cars work<span class="caret"></span></div>
                <div class="subject-body">
                    <?php foreach ($hcw_chapters as $chapter) { ?>
                        <div class="checkbox">
                            <label><input id="lesson" name="lesson[]" type="checkbox" value="<?php echo $chapter; ?>"><?php echo ucwords($chapter); ?>
                            </label>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <!--videos-->
            <div class="panel panel-default">
                <div class="panel-heading subject-header">Videos<span class="caret"></span></div>
                <div class="subject-body">
                    <?php foreach ($videos as $chapter) { ?>
                        <div class="checkbox">
                            <label><input id="lesson" name="lesson[]" type="checkbox" value="<?php echo $chapter; ?>"><?php echo ucwords($chapter); ?>
                            </label>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <!-- instructor notes-->
            <div class="panel panel-default">
                <div class="panel-heading">Instructor Notes</div>
                <div class="form-group">
                    <label for="comment"></label>
                    <textarea name="notes" class="form-control" rows="5" id="comment"></textarea>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-12">
            <!--submit the entire form-->
            <button style="width:100%;height:50px;"type="submit" name="submit" class="btn btn-primary">Record lesson &amp; email customer</button>
            </form>
            <br>
            <br>

            <div id="results"></div>
        </div>
    </div>
    <div class="block"></div>
</div>

<?php require_once '../includes/footer.php'; ?>
<script src="../js/functions-for-record-lesson.js"></script>
<script>
// initialize an array to store the subjects in the array from the progress_report field in the database
    var subjectsAlreadyCovered = [];
    $(document).ready(function () {

        loadSubjects(); // this function includes a call to tickBoxes() functions both of which are in external file
        getPrice(); // to be found in 'functions-for-record-lesson.js

        $(function () {
            $('#datepicker').datepicker({dateFormat: 'yy-mm-dd'});
        });

        // deals with drop downs
        $('.subject-body').hide();
        $('.subject-header')
                .mouseover(function () {
                    $(this).css('cursor', 'pointer')
                })
                .click(function () {
                    $(this).next('div').slideToggle('slow');
                });

    }); // end ready
</script>
</body>
</html>
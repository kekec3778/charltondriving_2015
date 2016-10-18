<?php
session_start();
$title = 'Contact Page | Neil\'s Driving School Chislehurst';
require_once '../includes/head.php';
require_once '../includes/nav.php';
?>


<ol class="breadcrumb">
    <li><a href="../index.php">Home</a></li>
    <li>Info</li>
    <li class="active">Enquiries</li>
</ol>

<div class="container">
    <div class="page-header"><h1>Enquiries</h1></div>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default form-panel well">
                
                <form method="POST" action="mail.php">

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" autofocus>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control" id="address">
                    </div>

                    <div class="form-group">
                        <label for="tel">Telephone</label>
                        <input type="tel" name="tel" class="form-control" placeholder="" id="tel">
                    </div>

                    <div class="form-group">
                        <label for="details">Enquiry</label>
                        <textarea class="form-control" rows="3" name="enquiry"></textarea>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-info" name="submit">
                    </div>
                </form>
            </div>
        </div>

        <div class="col-md-6">
            <img src="../img/young_man_400.jpg" alt="pass-your-test" class="center-block img-responsive">
        </div>

    </div>
</div>
<?php require_once '../includes/footer.php'; ?>
</body>
</html>
<?php
session_start();
$title = 'Learner Login';
require_once '../includes/head.php';
require_once '../includes/nav.php';
?>

<ol class="breadcrumb">
    <li><a href="../index.php">Home</a></li>
    <li class="active">Login</li>
</ol>

<div class="container">
    <div class="page-header"><h1>Login</h1></div>
    <div class="row">
        <div class="col-md-6">
            <p><?php if (isset($_GET['registered'])) { ?>
                <p class="green">You have successfully registered. Now you can login.</p>
            <?php
            } elseif (isset($_GET['message'])) {
                echo '<span class="red">* An email has been sent</span>. Please check your inbox to reset your password';
            } elseif (isset($_GET['email'])) {
                echo '<span class="green">* Your password has been updated</span>';
            } else {
                ?>
                <p>Please login using your email address and password.</p> <p>You'll need to <strong>create a password</strong> first. New customers can register and create a password <a href="register.php">HERE.</a></p> <?php } ?>


            <form role="form" action="../php_scripts/login_user.php" method="POST">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="<?php if (isset($_GET['email'])) echo $_GET['email']; ?>" required autofocus>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password" required>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Login</button>
            </form>
            <br>
            <p><a href="forgotten_password.php">Forgotten Password</a></p>
            <?php
            if (isset($_GET['error'])) {
                echo '<span class="red">' . '*' . $_GET['error'] . '</span>';
            }
            ?>
            <br>
        </div>

        <div class="col-md-6">
            <img src="../img/young_man_400.jpg" alt="pass-your-test" class="center-block img-responsive">
        </div>
    </div>
</div>

<?php require_once '../includes/footer.php'; ?>
</body>
</html>
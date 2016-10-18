<?php
session_start();
$title = 'Charlton Driving School | South East London';
require_once 'php_scripts/pages_array.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Driving Lessons in South East London.">
    <meta name="keywords" content="Driving, Driving Lessons, Lessons, Training, Tuition, Driving-Lessons, Driving Classes, Driving Test, driving lessons Bromley, driving lessons Chislehurst, driving lessons Sidcup,driving lessons Petts Wood, driving lessons Eltham,driving lessons New Eltham,driving lessons Lee,driving lessons Greenwich,driving lessons Blackheath,driving lessons Lewisham,driving lessons Mottingham, Online lessons, recommended instructor">
    <meta name="author" content="Neil Cartwright">
    <meta name="copyright" content="Neil Cartwright" />
    <meta name="author" content="Neil Cartwright" />

    <title><?php echo $title; ?></title>
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/logos/favicon.ico">
    <!--css-->

    <link rel="stylesheet" type="text/css" href="css/tabbed_panels.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!--<link rel="stylesheet" type="text/css" href="css/custom.css">-->
    <!-- <link rel="stylesheet" type="text/css" href="css/sass/new-css.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/media-queries.css"> -->
    <link rel="stylesheet" type="text/css" href="css-2016/temp/styles.css">
    <link rel="stylesheet" href="css/bjqs.css">
    <link rel="stylesheet" href="text-rotate/simpletextrotator.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <!-- jquery UI -->
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
    <!-- bootstrap -->
    <script src="bootstrap/js/bootstrap.js"></script>
    <!--jquery tabbed panels-->
    <script src="js/tabbed_panels.js"></script>
    <!--rotator-->
    <script src="text-rotate/jquery.simple-text-rotator.min.js"></script>

    <!--bing verification-->
    <meta name="msvalidate.01" content="C64A889DF3CA3241FD857EF970912CF2" />
</head>
<body class="body">
    <!-- fb like button -->
    <div id="fb-root"></div>
    <script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.6";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <!-- fb like end -->
    <div class="navig">  
        <?php require_once 'includes/nav_for_index.php'; ?>
    </div>
    <?php require_once 'includes/jumbotron.php'; ?>
    <?php require_once 'includes/main_content.php'; ?>
    <?php require_once 'includes/footer.php'; ?>
    <script>
    $(".rotate").textrotator({
animation: "dissolve", // You can pick the way it animates when rotating through words. Options are dissolve (default), fade, flip, flipUp, flipCube, flipCubeUp and spin.
separator: ",", // If you don't want commas to be the separator, you can define a new separator (|, &, * etc.) by yourself using this field.
speed: 7000 // How many milliseconds until the next word show.
});
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?php echo $title; ?></title>
        <!-- favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="../img/logos/favicon.ico">
        <?php
        require_once '../php_scripts/pages_array.php';
        require_once 'resources.php';
        
        if ($title == 'Members Home Page') {
            require_once '../php_scripts/videos_array.php';
            require_once '../php_scripts/pages_array.php';
            ?>
            <link rel="stylesheet" href="../css/imageQuiz.css">
            <script src="../js/images.js"></script>

        <?php } ?>
        <?php if ($title == 'Road Signs') { ?>
            <link rel="stylesheet" href="../css/signs.css">
        <?php } ?>
    </head>
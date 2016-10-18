<body class="body">
    <nav class="navbar navbar-inverse navig">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="brand-image" class="navbar-brand" href="../index.php">
                    Charlton Driving School
                </a>
            </div>


            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav"><!-- open ul 1 -->

                <?php if (!isset($_SESSION['logged_in'])) { ?>

                    <li><a href="../info/book.php">Enquiries</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Info<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu"><!-- nested ul -->
                            <li><a href="../info/about_me.php">About Me</a></li>
                            <li><a href="../info/recommendations.php">Recommendations</a></li>
                            <li><a href="../info/prices.php">Prices</a></li>
                        </ul><!-- close nested ul -->
                    </li>
                <?php } ?>


                    <!-- knowledge and skills -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Theory<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <?php foreach ($pages as $page) { ?>
                                <li><a target="_blank" href="../knowledge/<?php echo $page; ?>.php"><?php echo ucfirst($page); ?></a></li>
                            <?php } ?>
                        </ul>
                    </li>

                    <?php if (!isset($_SESSION['logged_in'])) { ?>
                    <!-- areas -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Areas<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="../areas/driving-lessons-in-bromley-br1.php">Bromley</a></li>
                            <li><a href="../areas/driving-lessons-in-charlton-se7.php">Charlton</a></li>
                            <li><a href="../areas/driving-lessons-in-chislehurst-br7.php">Chislehurst</a></li>
                            <li><a href="../areas/driving-lessons-in-eltham-se9.php">Eltham</a></li>
                            <li><a href="../areas/driving-lessons-in-lee-and-grove-park-se12.php">Lee Green</a></li>
                            <li><a href="../areas/driving-lessons-in-eltham-se9.php">Eltham and Mottingham</a></li>
                            <li><a href="../areas/driving-lessons-in-blackheath-kidbrooke-se3.php">Blackheath and Kidbrooke</a></li>
                            <li><a href="../areas/driving-lessons-in-sidcup-da14.php">Sidcup</a></li>
                        </ul>
                    </li>
                    <?php } ?>


                    <!-- show members menu to logged in members-->
                    <?php if (isset($_SESSION['logged_in'])) { ?>
                    <li>
                        <a href="../members/members-home.php">My Driving</a>
                    </li>
                    <li class="divider"></li>
                    <?php } ?>
                        
                    <?php if (isset($_SESSION['admin'])) { ?>
                    <li>
                        <a href="../admin/admin.php">Admin</a>
                    </li>
                <?php } ?>
                        
                <?php if (!isset($_SESSION['logged_in'])) { ?>
                    <li><a class="login_button" href="../info/login.php">Login</a></li>
                <?php } else { ?>
                    <li><a class="login_button" href="../php_scripts/logout.php">Logout</a></li>
            <?php } ?>
                </ul>
            </div>
        </div>
    </nav>


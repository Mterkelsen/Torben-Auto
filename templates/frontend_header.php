<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500' rel='stylesheet' type='text/css'>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.js"></script>

    <script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>

    <script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>



    <title>ESR - Menu</title>
    <meta name="description" content="Restauranten hjælper dig - til et sundere og bedre liv"/>

</head>
<body>
<div class="container-fluid no-padding">
    <div class="col-md-12 no-padding">
        <img class="top-banner" src="images/header.gif" />
    </div>
</div>
<nav role="navigation" class="navbar navbar-default bg-black menucsscontrol">
    <div class="container-fluid navcontainer">
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar "></span>
                <span class="icon-bar "></span>
                <span class="icon-bar "></span>
            </button>

        </div>

        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar ulcontrol cl-black">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="reservation.php">Book table</a></li>
                <li><a href="kontakt.php">Contact</a></li>
                <li><a href="news.php">News</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right cl-black">
                <?php
                if (logged_in()) {
                    echo "<li><a href='myprofile.php'>My profile  <span class='glyphicon glyphicon-user'></span></a></li>
							<li><a href='includes/logout.php'>Logout  <span class='glyphicon glyphicon-lock'></span></a></li>";
                }



                if (admin_logged_in()) {
                    echo "<li><a href='backend.php'>Backend  <span class='glyphicon glyphicon-cog'></span></a></li>"."<li><a href='includes/logout.php'>Logout  <span class='glyphicon glyphicon-lock'></span></a></li>";
                }elseif (!admin_logged_in() and !logged_in()) {
                    echo "<li class='loginbutton' ><a href='medlemslogin.php'>Login <span class='glyphicon glyphicon-lock'></span></a></li>";
                }

                ?>


            </ul>
        </div>
    </div>
</nav>
<div class="social-icons bg-opacity border-red">
    <a href="http://www.twitch.tv/" class="socialHref"><div class="col-md-12 no-padding socialHref"><img src="../images/icons/social%20media/tv.png" class="media-icons center-block"></div></a>
    <a href="https://twitter.com/"  class="socialHref"><div class="col-md-12 no-padding socialHref"><img src="../images/icons/social%20media/twitter.png" class="media-icons center-block"></div></a>
</div>
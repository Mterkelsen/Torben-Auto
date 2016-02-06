<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <script src="//cdn.ckeditor.com/4.5.4/full/ckeditor.js"></script>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.js"></script>



    <title>Restaurant - Forside</title>
    <meta name="description" content="Restauranten hj?lper dig - til et sundere og bedre liv"/>

</head>
<body>
<div class="container-fluid no-padding hidden-xs hidden-sm">
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
                <li class="active"><a href="backend.php">Home</a></li>
                <li><a href="brugeradmin.php">User Management</a></li>
                <li><a href="bookingadmin.php">Booking Management</a></li>
                <li><a href="nyhedsoprettelse.php">News Management</a></li>
                <li><a href="menuadmin.php">Menu Management</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right cl-black">
                <?php
                if (admin_logged_in()) {
                    echo "<li><a href='index.php'>Frontend  <span class='glyphicon glyphicon-home'></span></a></li>"."<li><a href='includes/logout.php'>Logout  <span class='glyphicon glyphicon-lock'></span></a></li>";
                }
                ?>


            </ul>
        </div>
    </div>
</nav>

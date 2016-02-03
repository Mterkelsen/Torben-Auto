<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/torben/css/bootstrap.css" rel="stylesheet" />
    <link href="/torben/css/style.css" rel="stylesheet" />
    <link href="/torben/css/hover.css" rel="stylesheet" media="all">
    <script src="//cdn.ckeditor.com/4.5.4/full/ckeditor.js"></script>
    <script type="text/javascript" src="/torben/ckeditor/ckeditor.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="/torben/js/bootstrap.js"></script>



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
            <a href="index.php" class="navbar-brand brand-container"><h3 class="txt-shadowred">Electronic Sports Restaurant</h3></a>
        </div>

        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar ulcontrol cl-black">
                <li class="active"><a href="adminPanel.php">Forside</a></li>
                <li><a href="brugereAdmin.php">Bruger administrering</a></li>
                <li><a href="nyhedsAdmin.php">Nyheds administrering</a></li>
                <li><a href="galleriAdmin.php">Galleri administrering</a></li>

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

<?php
require_once('connection.php');
require_once("session.php");
require_once("functions.php");

$MenuName = $_POST["SelectDaily"];

if (isset ($_POST['submit'])){
    if (empty($MenuName)) {

        echo "You need to choose a menu before you can upload the daily special!";

    }
    $CleanDaily = "UPDATE menus SET daily='0'";

    $Delete = mysqli_query($connection, $CleanDaily);

    $Query = "UPDATE menus SET daily='1' WHERE menu_name ='".$MenuName."'";

    $Update = mysqli_query($connection, $Query);

    redirect_to("../backend.php?MiD=6");

}









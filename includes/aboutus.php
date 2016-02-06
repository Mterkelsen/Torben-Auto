<?php
require_once("connection.php");
require_once("session.php");
require_once("functions.php");

if (isset($_POST['submitAbout'])) {

    $Header = $_POST['header'];
    $Paragraph = $_POST['editor'];


    $AboutQuery = "UPDATE company SET header='$Header', paragraph='$Paragraph'";

    $AboutUpdate = mysqli_query($connection, $AboutQuery);
    redirect_to('../backend.php?MiD=7');

}
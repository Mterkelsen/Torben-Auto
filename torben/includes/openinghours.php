<?php
require_once("connection.php");
require_once("session.php");
require_once("functions.php");

if (isset($_POST['submitUpdate'])) {

    $Monday = $_POST['Monday'];
    $Tuesday = $_POST['Tuesday'];
    $Wednesday = $_POST['Wednesday'];
    $Thursday = $_POST['Thursday'];
    $Friday = $_POST['Friday'];
    $Saturday = $_POST['Saturday'];
    $Sunday = $_POST['Sunday'];

    $OpeningQuery = "UPDATE openinghours SET monday='$Monday', tuesday='$Tuesday',  wednesday='$Wednesday', thursday='$Thursday', friday='$Friday', saturday='$Saturday', sunday='$Sunday'";

    $OpeningUpdate = mysqli_query($connection, $OpeningQuery);
    redirect_to('../backend.php?MiD=5');

}
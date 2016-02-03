<?php
require_once("connection.php");
require_once("session.php");
require_once("functions.php");

if (isset($_POST['submitUpdate'])) {

    $Mandag = $_POST['Mandag'];
    $Tirsdag = $_POST['Tirsdag'];
    $Onsdag = $_POST['Onsdag'];
    $Torsdag = $_POST['Torsdag'];
    $Fredag = $_POST['Fredag'];
    $Lørdag = $_POST['Lørdag'];
    $Søndag = $_POST['Søndag'];

    $OpeningQuery = "UPDATE openinghours SET Mandag='$Mandag', Tirsdag='$Tirsdag',  Onsdag='$Onsdag', Torsdag='$Torsdag', friday='$Fredag', saturday='$Lørdag', sunday='$Søndag'";

    $OpeningUpdate = mysqli_query($connection, $OpeningQuery);
    redirect_to('../backend.php?MiD=5');

}
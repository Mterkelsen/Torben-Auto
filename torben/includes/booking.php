<?php
require_once("connection.php");
require_once("session.php");
require_once("functions.php");
require_once("userlogin.php");

session_start();

// IMPORTANT VARIABLES
$UserId = $_SESSION['user_id'];
$BookingDate = $_POST['bookDate'];
$TableNumber = $_POST['bookTables'];
$TimeFrame = $_POST['bookTime'];




if (isset($_POST['submitBook'])){
    if(empty($_POST['bookSeats'])){
        $bookSeatsError = "You need to select the number of seats";
    }
    if(empty($_POST['bookTime'])){
        $bookTimeError = "You need to select the time frame for your reservation";
    }
    if(empty($_POST['bookDate'])){
        $bookTimeError = "You need to select a date for your reservation";
    }



    function check_status($BookingDate, $TimeFrame, $SelectedTableID){
        $sql = "SELECT table_id FROM booking WHERE reservation_date='$BookingDate' AND booking_timeframe='$TimeFrame' AND table_id='$SelectedTableID' ";
        $result = mysqli_query(mysqli_connect(DB_SERVER,DB_USER,DB_PASS, DB_NAME), $sql);

        if(mysqli_num_rows($result) > 0){
            return 1;

        }else{
            Return 0;

        }
    }

    if(check_status($BookingDate, $TimeFrame, $SelectedTableID) == 1){
        redirect_to('../reservation.php?MiD=10');

    }



}
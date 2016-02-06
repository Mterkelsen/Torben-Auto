<?php
require_once("connection.php");
require_once("session.php");
require_once("functions.php");
require_once("userlogin.php");

session_start();

// IMPORTANT VARIABLES
$UserId = $_SESSION['user_id'];
$BookingDate = $_POST['bookDate'];
$SeatNumber = $_POST['bookSeats'];
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



    function check_status($BookingDate, $TimeFrame, $SeatNumber){
        $sql = "SELECT table_id FROM booking WHERE reservation_date='$BookingDate' AND booking_timeframe='$TimeFrame' AND table_seats='$SeatNumber' ";
        $result = mysqli_query(mysqli_connect(DB_SERVER,DB_USER,DB_PASS, DB_NAME), $sql);

        if(mysqli_num_rows($result) > 1){
            return 1;

        }else{
            Return 0;

        }
    }

    if(check_status($BookingDate, $TimeFrame, $SeatNumber) == 1){
        redirect_to('../reservation.php?MiD=10');

    }elseif(check_status($BookingDate, $TimeFrame, $SeatNumber) == 0){
        redirect_to("../reservationstep2.php?date=".$BookingDate."&seat=".$SeatNumber."&timeframe=".$TimeFrame."&user=".$UserId."");
    }



}
if (isset($_POST['submitSave'])){
    if(empty($_POST['timeframe'])){
        $bookSeatsError = "You need to select the number of seats";
    }
    if(empty($_POST['date'])){
        $bookTimeError = "You need to select the time frame for your reservation";
    }
    if(empty($_POST['table'])){
        $bookTimeError = "You need to select a date for your reservation";
    }
    if(empty($_POST['seats'])){
        $bookTimeError = "You need to select a date for your reservation";
    }

    $UpdatedTimeframe = $_POST['timeframe'];
    $UpdatedDate = $_POST['date'];
    $UpdatedTable = $_POST['table'];
    $UpdatedSeats = $_POST['seats'];
    $BookingId = $_POST['bookingID'];

    function check_status($UpdatedDate, $UpdatedTimeframe, $UpdatedTable){
        $sql = "SELECT * FROM booking WHERE reservation_date='$UpdatedDate' AND booking_timeframe='$UpdatedTimeframe'  AND table_id='$UpdatedTable' ";
        $result = mysqli_query(mysqli_connect(DB_SERVER,DB_USER,DB_PASS, DB_NAME), $sql);

        if(mysqli_num_rows($result) >= 1){
            return 1;

        }else{
            return 0;

        }
    }

    if(check_status($UpdatedDate, $UpdatedTimeframe,  $UpdatedTable) == 1){
        redirect_to("../editbooking.php?bookingId='$BookingId'&MiD=1");

    }elseif(check_status($UpdatedDate, $UpdatedTimeframe,  $UpdatedTable) == 0){
        $UpdateQuery = "UPDATE booking SET booking_timeframe='$UpdatedTimeframe', reservation_date='$UpdatedDate', table_id='$UpdatedTable', table_seats='$UpdatedSeats' WHERE booking_id='$BookingId'";

        $UpdatingBooking = mysqli_query($connection, $UpdateQuery);
        redirect_to("../bookingadmin.php?MiD=5");
    }




}

if (isset($_POST['submitDelete'])){


        $BookingId = $_POST['bookingID'];

        $DeleteQuery = "DELETE FROM booking WHERE booking_id='$BookingId'";

        $DeleteBooking = mysqli_query($connection, $DeleteQuery);

        redirect_to("../bookingadmin.php?MiD=6");


}
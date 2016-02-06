<?php
require_once("connection.php");
require_once("session.php");
require_once("functions.php");
require_once("userlogin.php");

session_start();

// IMPORTANT VARIABLES
$UserId = $_SESSION['user_id'];
$BookingDate = $_POST['date'];
$SeatNumber = $_POST['seat'];
$Time = $_POST['time'];
$TableId = $_POST['SelectTable'];


if (isset($_POST['submitFinal'])){
    if(empty($_POST['SelectTable'])){
        $bookSeatsError = "You need to select a table to reserve";
    }




    function check_status($BookingDate, $Time, $SeatNumber, $TableId){
        $sql = "SELECT table_id FROM booking WHERE reservation_date='$BookingDate' AND booking_timeframe='$Time' AND table_seats='$SeatNumber' AND table_id='$TableId' ";
        $result = mysqli_query(mysqli_connect(DB_SERVER,DB_USER,DB_PASS, DB_NAME), $sql);

        if(mysqli_num_rows($result) >= 1){
            return 1;

        }else{
            Return 0;

        }
    }

    if(check_status($BookingDate, $Time, $SeatNumber, $TableId) == 1){
        redirect_to('../reservation.php?MiD=10');

    }elseif(check_status($BookingDate, $Time, $SeatNumber, $TableId) == 0){
        $GetSeats = "SELECT table_seats FROM tables WHERE table_id='$TableId'";
        $GettingSeats = mysqli_query($connection, $GetSeats);
        while($SeatsArray=mysqli_fetch_array($GettingSeats)){
            $TableSeats = $SeatsArray['table_seats'];
        }

        $BookQuery = "INSERT INTO booking (customer_id, booking_timeframe, reservation_date, table_id, table_seats) VALUES ('$UserId','$Time','$BookingDate','$TableId','$TableSeats')";

        $BookingTable = mysqli_query($connection, $BookQuery);

        redirect_to('../reservation.php?MiD=7');
    }



}
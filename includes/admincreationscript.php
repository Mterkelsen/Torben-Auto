<?php
require_once('connection.php');






$password = "admin1";
$Username = "admin1";
$Firstname = "Matthias";
$Lastname = "Terkelsen";

$iterations = ['cost' => 15, 'salt' => "thisIsTheBestExtraSecurity"];
$Hpass = password_hash($Password, PASSWORD_BCRYPT, $iterations);


$sql = mysqli_query($connection, "INSERT INTO admin (admin_user,admin_pass,admin_firstname,admin_lastname, security_level) VALUES ('$Username', '{$Hpass}', '$Firstname', '$Lastname','1' )");
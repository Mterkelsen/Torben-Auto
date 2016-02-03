<?php
define("DB_SERVER", "mysql9.unoeuro.com");
define("DB_USER", "examserver39_dk");
define("DB_PASS", "dh2rbct9");
define("DB_NAME", "examserver39_dk_db");

$connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS, DB_NAME);
if (mysqli_connect_errno($connection)){
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}
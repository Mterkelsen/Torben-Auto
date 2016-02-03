<?php require_once("connection.php"); ?>
<?php require_once("session.php"); ?>
<?php require_once("functions.php"); ?>
<?php

$LoginUsername = ""; $LoginUsernameError = "";
$LoginPassword = ""; $LoginPasswordError = "";

if (isset ($_POST['submit'])) {

    if ( empty ( $_POST["txtUsername"] ) ) {

        $LoginUsernameError = "<h4>The given Username does not exist</h4>";

    }
    if ( empty ( $_POST["txtPassword"] ) ) {

        $LoginPasswordError = "<h4>The given password does not exist</h4>";

    }


    $LoginUsername = htmlspecialchars(mysqli_real_escape_string($connection,$_POST['txtUsername']));
    $LoginPassword = htmlspecialchars(mysqli_real_escape_string($connection,$_POST['txtPassword']));


    $query = "SELECT * FROM customers WHERE username = '{$LoginUsername}' LIMIT 1";
    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) == 1) {

        $found_user = mysqli_fetch_array($result); 
        if(password_verify($LoginPassword, $found_user['password'])){
            $_SESSION['user_id'] = $found_user['customer_id'];
            $_SESSION['user'] = $found_user['username'];
						
            redirect_to("../index.php?MiD=4");
        }

    } else {

        $message = "<h4>Username/password combination incorrect.<br />
					Please make sure your caps lock key is off and try again.</h4>";
    }
}

$found_user['customer_id'] = $UserId;

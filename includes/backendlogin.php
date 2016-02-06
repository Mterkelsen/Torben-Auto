<?php require_once("connection.php"); ?>
<?php require_once("session.php"); ?>
<?php require_once("functions.php"); ?>
<?php



if (isset ($_POST['submit'])){

    if ( empty ( $_POST["txtUsername"] ) ) {

        $LoginUsernameError = "<h4>The given Username does not exist</h4>";

    }
    if ( empty ( $_POST["txtPassword"] ) ) {

        $LoginPasswordError = "<h4>The given password does not exist</h4>";

    }


    $LoginUsername = htmlspecialchars(mysqli_real_escape_string($connection,$_POST['txtUsername']));
    $LoginPassword = htmlspecialchars(mysqli_real_escape_string($connection,$_POST['txtPassword']));


    $query = "SELECT * FROM admin WHERE admin_user='{$LoginUsername}' LIMIT 1";

    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) == 1) {

        $found_user = mysqli_fetch_array($result); 
        if(password_verify($LoginPassword, $found_user['admin_pass'])){
            $_SESSION['admin_id'] = $found_user['admin_id'];
            $_SESSION['admin'] = $found_user['admin_user'];
						
            redirect_to("../backend.php?MiD=4");
        }else {

            redirect_to('../admin.php?MiD=2');
        }

    } else {
        $LoginUsername = ""; $LoginUsernameError = "";
        $LoginPassword = ""; $LoginPasswordError = "";
        redirect_to('../admin.php?MiD=1');
    }
}
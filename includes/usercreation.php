<?php
require_once('connection.php');


if (isset ($_POST['submit'])){
    if (empty( $_POST["crtFname"] ) ) {

        $FnameError = "Firstname is required";
				
}
    elseif (empty( $_POST["crtLname"] ) ) {

        $LnameError = "Lastname is required";

    }
    elseif (empty( $_POST["crtEmail"] ) ) {

        $EmailError = "Email is required";

    }
    elseif (empty( $_POST["crtUsername"] ) ) {

        $UsernameError = "Username is required";

    }
    elseif (empty( $_POST["crtPassword"] ) ) {

        $PasswordError = "Password is required";

    }
		}




if (isset ($_POST['submit'])){
    $Fname = htmlspecialchars(mysqli_real_escape_string($connection,$_POST['crtFname']));
    $Lname = htmlspecialchars(mysqli_real_escape_string($connection,$_POST['crtLname']));
    $Email = htmlspecialchars(mysqli_real_escape_string($connection,$_POST['crtEmail']));
    $Username =  htmlspecialchars(mysqli_real_escape_string($connection,$_POST['crtUsername']));
    $Password = htmlspecialchars(mysqli_real_escape_string($connection,$_POST['crtPassword']));
    $iterations = ['cost' => 15, 'salt' => "thisIsTheBestExtraSecurity"];
    $Hpass = password_hash($Password, PASSWORD_BCRYPT, $iterations);
		
}




$secret = "6Lc0Ag4TAAAAANVnCekhMo1sm-WW-pr8v2okSTdK";
$response = $_POST["g-recaptcha-response"];
$getstuff = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$response);
$success = json_decode($getstuff,true);
if($success['success']){
    
		$sql = mysqli_query($connection, "INSERT INTO customers (first_name,last_name,email,username,password) VALUES ('$Fname', '$Lname', '$Email', '$Username', '{$Hpass}')");
    header('Location: ../medlemslogin.php?MiD=1');
}
else {
	header('Location: ../medlemslogin.php?MiD=2');
}


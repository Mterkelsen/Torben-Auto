<?php require_once("functions.php"); ?>
<?php
$mymail = "anders.bergmann89@gmail.com";
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$regexp = "/^[^0-9][A-z0-9_-]+([.][._][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_-]+)*[.][A-z]{2,4}$/";

if (isset($_POST['submit']))
{
    if (!preg_match($regexp,$_POST['email'])) {
        redirect_to('../kontakt.php?MiD=2');
    }elseif (empty($email) || empty($message) || empty($subject)){
        redirect_to('../kontakt.php?MiD=3');
    }

    $secret = "6Lc0Ag4TAAAAANVnCekhMo1sm-WW-pr8v2okSTdK";
    $response = $_POST["g-recaptcha-response"];
    $getstuff = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$response);
    $success = json_decode($getstuff,true);
    if($success['success']){
        $body = "$subject\n\n$message\n\nFrom: $email";
        mail($mymail,$subject,$body,"From: $email\n");
        redirect_to('../kontakt.php?MiD=1');
    }else {
        redirect_to('../kontakt.php?MiD=4');
    }
};

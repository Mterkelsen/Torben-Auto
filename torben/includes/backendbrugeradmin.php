<?php
require_once('connection.php');
require_once('functions.php');


if (isset ($_POST['submit'])){
    if (empty( $_POST["AdminUsername"] ) ) {

        $AdminUsernameError = "Admin username is required";

    }
    elseif (empty( $_POST["AdminPassword"] ) ) {

        $AdminPasswordError = "Admin password is required";

    }
    elseif (empty( $_POST["AdminFname"] ) ) {

        $AdminFnameError = "Admin firstname is required";

    }
    elseif (empty( $_POST["AdminLname"] ) ) {

        $AdminLnameError = "Admin lastname is required";

    }

    $Username = $_POST['AdminUsername'];
    $Password = $_POST['AdminPassword'];
    $Fname = $_POST['AdminFname'];
    $Lname = $_POST['AdminLname'];

    $AdminQuery = "INSERT INTO admin (admin_user, admin_pass, admin_firstname, admin_lastname, security_level) VALUES ('$Username', ' $Password', '$Fname', '$Lname', '1')";

    $CreateAdmin = mysqli_query($connection, $AdminQuery);

    redirect_to("../brugeradmin.php?MiD=5");
}

if (isset ($_POST['DeleteAdmin'])){
    $AdminName = $_POST['SelectAdmin'];
    if (empty($AdminName)) {

        echo "You need to choose an admin before you can delete!";

    }

    $DeleteQuery = "DELETE FROM admin WHERE admin_firstname='".$AdminName."'";

    $DeleteAdmin = mysqli_query($connection, $DeleteQuery);

    redirect_to("../brugeradmin.php?MiD=6");
}
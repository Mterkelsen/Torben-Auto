<?php
require_once("connection.php");
require_once("session.php");
require_once("functions.php");

if (isset($_POST['submitCreate'])){
    if (empty( $_POST["menuName"] ) ) {

        $menuNameError = "Menu name is required";

    }
    elseif (empty( $_POST["editor"] ) ) {

        $menuDescriptionError = "Menu description is required";

    }
    elseif (empty( $_POST["menuCategory"] ) ) {

        $menuCategoryError = "Menu category is required";

    }elseif (empty( $_POST["menuPrice"] ) ) {

        $menuCategoryError = "Menu price is required";

    }

    $MenuTitle = $_POST['menuName'];
    $MenuDesc = $_POST['editor'];
    $MenuCategory = $_POST['menuCategory'];
    $MenuPrice = $_POST['menuPrice'];

    mysqli_set_charset($connection, "utf8");

    $CreationQuery = "INSERT INTO menus (menu_name,menu_description,menu_price, menu_category, daily) VALUES ('$MenuTitle','$MenuDesc','$MenuPrice','$MenuCategory','0') ";

    $MenuCreating = mysqli_query($connection, $CreationQuery);
    redirect_to('../menuadmin.php?MiD=4');

}


if (isset ($_POST['submitDaily'])){
    $MenuName = $_POST["SelectDaily"];
    if (empty($MenuName)) {

        echo "You need to choose a menu before you can upload the daily special!";

    }
    $CleanDaily = "UPDATE menus SET daily='0'";

    $Delete = mysqli_query($connection, $CleanDaily);

    $Query = "UPDATE menus SET daily='1' WHERE menu_name ='".$MenuName."'";

    $Update = mysqli_query($connection, $Query);

    redirect_to("../backend.php?MiD=6");

}

if(isset($_POST['submitDelete'])){
    $MenuDelete = $_POST["SelectDelete"];
    $DeleteQuery = "DELETE FROM menus WHERE menu_name='".$MenuDelete."'";
    $GoodbyeMenu = mysqli_query($connection,$DeleteQuery);
    redirect_to("../menuadmin.php?MiD=5");
}

if (isset($_POST['submitEdit'])){
    if (empty( $_POST['editName'] ) ) {

        $newsHeaderError = "Name is required";

    }
    elseif (empty( $_POST['editor'] ) ) {

        $newsContentError = "Description is required";

    }
    elseif (empty( $_POST['editCategory'] ) ) {

        $newsCategoryError = "Menu category is required";

    }
    elseif (empty( $_POST['editPrice'] ) ) {

        $newsCategoryError = "Menu price is required";

    }


    $menuID = $_POST['HiddenID'];
    $EditName = $_POST['editName'];
    $EditDesc = $_POST['editor'];
    $EditCategory = $_POST['editCategory'];
    $EditPrice = $_POST['editPrice'];

    $UpdateQuery = "UPDATE menus SET menu_name='$EditName', menu_description='$EditDesc',  menu_category='$EditCategory', menu_price='$EditPrice' WHERE menu_id='$menuID'";

    $MenuUpdate = mysqli_query($connection, $UpdateQuery);
    redirect_to('../menuadmin.php?MiD=3');
}



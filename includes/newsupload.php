<?php
require_once('connection.php');
require_once('functions.php');

if (isset($_POST['submit'])) {

    if (empty( $_POST["newsHeader"] ) ) {

        $newsHeaderError = "Title is required";

    }
    elseif (empty( $_POST["editor"] ) ) {

        $newsContentError = "Paragraph is required";

    }
    elseif (empty( $_POST["newsCategory"] ) ) {

        $newsCategoryError = "News category is required";

    }

    $NewsHeader = $_POST['newsHeader'];
    $NewsParagraph = $_POST['editor'];
    $NewsCategory = $_POST['newsCategory'];
    mysqli_set_charset($connection, "utf8");

    $query = "INSERT INTO news (news_header,news_content,news_category) VALUES ('$NewsHeader','$NewsParagraph','$NewsCategory') ";

    $sql = mysqli_query($connection, $query);
    header('Location: ../nyhedsoprettelse.php?MiD=3');

}

if (isset($_POST['submitDelete'])){

    $DeleteNews = $_POST['SelectDeletion'];

    $NewsDeleteQuery = "DELETE FROM news where news_header='".$DeleteNews."'";
    $Goodbye = mysqli_query($connection, $NewsDeleteQuery);
    header('Location: ../nyhedsoprettelse.php?MiD=5');

}

if (isset($_POST['submitEdit'])){
    if (empty( $_POST['editHeader'] ) ) {

        $newsHeaderError = "Title is required";

    }
    elseif (empty( $_POST['editor'] ) ) {

        $newsContentError = "Paragraph is required";

    }
    elseif (empty( $_POST['editCategory'] ) ) {

        $newsCategoryError = "News category is required";

    }
    $NewsID = $_POST['HiddenID'];
    $EditHeader = $_POST['editHeader'];
    $EditContent = $_POST['editor'];
    $EditCategory = $_POST['editCategory'];

    $UpdateQuery = "UPDATE news SET news_header='$EditHeader', news_content='$EditContent',  news_category='$EditCategory' WHERE news_id='$NewsID'";

    $NewsUpdate = mysqli_query($connection, $UpdateQuery);
    redirect_to('../nyhedsoprettelse.php?MiD=4');
}
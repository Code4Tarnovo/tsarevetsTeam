<?php
session_start();
require ('../connectDB.php');
if (isset($_POST['postComment'])) {
    $author = $_SESSION['userSession'];
    $id = $_POST['statusId'];
    $sqltest = mysqli_query($connect, "SELECT * FROM `dashboard` WHERE id = '" . $id . "' ORDER by id DESC LIMIT 0,1");
    $rowtest = mysqli_fetch_array($sqltest, MYSQLI_ASSOC);
    $getId = $rowtest['id'];

    $comment = $_POST['comment'];
    $date = date("F j, Y, g:i a");

    $query = mysqli_query($connect, "INSERT INTO comments (author, date, comment, statusId)VALUES ('$author', '$date', '$comment', '$getId')");
    if($query == true){
        header('Location: ../main');
    }
}
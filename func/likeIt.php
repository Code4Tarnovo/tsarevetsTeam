<?php
session_start();
require '../connectDB.php';
if (isset($_POST['submitLike'])) {
    $likeBy = $_SESSION['userSession'];
    $likeType = '1';
    $postId = $_POST['postId'];

    $query = mysqli_query($connect, "INSERT INTO likes (statusId, likeBy, likeType)VALUES ('$postId', '$likeBy', '$likeType')");
    if($query == true){
        header('Location: ../main');
    }
    
}
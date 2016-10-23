<?php
require ('../connectDB.php');
if (isset($_GET['id'])) {
    $commId = $_GET['id'];

    $query = mysqli_query($connect, "DELETE FROM comments WHERE id = ".$commId." ");
    if($query == true){
        header('Location: ../main');
    }
    
}
<?php
require ('../connectDB.php');
if (isset($_GET['id'])) {
    $statusId = $_GET['id'];

    $query = mysqli_query($connect, "DELETE FROM dashboard WHERE id = ".$statusId." ");
    if($query == true){
        header('Location: ../main');
    }
    
}
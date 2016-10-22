<?php
//Login процеса...
session_start();
require_once("../connectDB.php");

if (isset($_SESSION['userSession'])!="") {
 header("Location: main.php");
 exit;
}
if (isset($_POST['submit'])) {
 

 $username = stripslashes($_POST['username']);
 $password = stripslashes($_POST['password']);
 
 $username = $connect->real_escape_string($username);
 $password = $connect->real_escape_string($password);
 
 $query = $connect->query("SELECT * FROM users WHERE username='$username'");
 $row=$query->fetch_array();
 
 $count = $query->num_rows; // ако потребителското име и паролата е 1 значи всичко е 6\

 if (password_verify($password, $row['password'])) {
  $_SESSION['userSession'] = $row['id'];
  header("Location: ../main");
 } else {
  header("Location: ../welcome?error");
 }
 $connect->close();
}
?>
<?php
$id = $_SESSION['userSession'];

$sql = mysqli_query($connect, "SELECT * FROM `users` WHERE id = '$id'");
$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);
$myId = $row['id'];
$myUser = $row['username'];
$myRealName = $row['realName'];
$myAvatar = $row['avatar'];
$myRank = $row['rank'];
?>
<?php
//Login процеса...

session_start(); // Стартираме сесията
$error=''; // Променливата където ще извеждаме грешка
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Грешка при потребителското име или парола";
}
else
{
// Дефинираме $username и $password
$username=$_POST['username'];
$password=$_POST['password'];

// Защита срещу SQL injections
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Вкарваме DB връзката
require ('../connectDB.php');
$query = mysql_query("SELECT * FROM users WHERE password='$password' AND username='$username'", $connect);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Инициализиране на сесията
header("location: profile.php"); // препращане към друга страница след логването
} else {
$error = "Грешка при потребителското име или парола";
}
mysql_close($connect); // Затваряме връзката с DB
}
}
?>
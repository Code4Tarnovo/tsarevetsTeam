<?php
/*
Свързващия файл към базата данни.
*/
$DBhost = "localhost";
$DBuser = "root";
$DBpass = "";
$DBname = "vthelp";
$connect = new mysqli($DBhost, $DBuser, $DBpass, $DBname) or die("Не може да се свърже към MySQL");

mysqli_set_charset($connect, 'UTF8');
if (!$connect) {
	echo 'Грешка във връзката с базата данни!';
}
?>
<?php
//Файла чрез който ще се свържем към базата данни

$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';

$connect = mysql_connect($dbHost, $dbUser, $dbPass) or die("Neshto ne se poluchi vruzkata...");

$selected = mysql_select_db("VThelp",$connect)
  or die("Ne e izbrana baza :)");
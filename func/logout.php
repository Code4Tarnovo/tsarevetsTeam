<?php
session_start();
if (!isset($_SESSION['userSession'])) {
 header("Location: ../welcome.php");
} else if (isset($_SESSION['userSession'])!="") {
 session_destroy();
 unset($_SESSION['userSession']);
 header("Location: ../welcome");
}

if (isset($_GET['logout'])) {
 session_destroy();
 unset($_SESSION['userSession']);
 header("Location: ../welcome");
}
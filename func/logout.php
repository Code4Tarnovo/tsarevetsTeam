<?php
session_start();
session_destroy();
if (!isset($_SESSION['userSession'])) {
 header("Location: ../welcome");
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
<?php

//start php tag
//include connect.php page for database connection
require("../connectDB.php");
if (isset($_POST["submit"])) {
    $username = $_POST["Username"];
    $RealName = $_POST["RealName"];
    $email = $_POST["Email"];
    $password = $_POST["Password"];

    $required = array('Username', 'RealName', 'Email', 'Password');

// Loop over field names, make sure each one exists and is not empty
    $error = false;
    foreach ($required as $field) {
        if (empty($_POST[$field])) {
            $error = true;
        }
    }

    if ($error) {
        header("Location: ../welcome?emptyFields");
    } else {
    $RealName = mysqli_real_escape_string($connect, $RealName);
    $email = mysqli_real_escape_string($connect, $email);
    $password = mysqli_real_escape_string($connect, $password);
    $secret = password_hash($password, PASSWORD_BCRYPT);


    $sql = "SELECT email FROM users WHERE email='$email'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if (mysqli_num_rows($result) == 1) {
        echo "Съжаляваме...Този е-майл е вече регистриран...";
    } else {
        $query = mysqli_query($connect, "INSERT INTO users (username, realName, email, password)VALUES ('$username', '$RealName', '$email', '$secret')");
        if ($query) {
            header("Location: ../welcome?success");
        } else {
            echo "Грешка: Неуспешна регистрация.";
        }
    }
    }
}
?>
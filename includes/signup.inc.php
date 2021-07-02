<?php

if (isset($_POST["submit"])) {

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordConf = $_POST["passwordConf"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($username, $email, $password, $passwordConf) !== false) {
        header("location: ../signup.php?error=emptyInput");
        exit();
    }
    if (invalidUsername($username) !== false) {
        header("location: ../signup.php?error=invalidUsername");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidEmail");
        exit();
    }
    if (confirmPassword($password, $passwordConf) !== false) {
        header("location: ../signup.php?error=failedPasswordConfirmation");
        exit();
    }
    if (usernameExists($conn, $username, $email) !== false) {
        header("location: ../signup.php?error=usernameNotAvailable");
        exit();
    }

    createUser($conn, $username, $email, $password);


} else {
    header("location: ../signup.php");
    exit();
}
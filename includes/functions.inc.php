<?php

use JetBrains\PhpStorm\NoReturn;

function emptyInputSignup($username, $email, $password, $passwordConf): bool
{
    $result = null;
    if (empty($username) || empty($email) || empty($password) || empty($passwordConf)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function invalidUsername($username): bool
{
    $result = null;
    if (preg_match("/^[a-zA-Z0-9]*?/", $username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function invalidEmail($email): bool
{
    $result = null;
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function confirmPassword($password, $passwordConf): bool
{
    $result = null;
    if ($password !== $passwordConf) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function usernameExists($conn, $username, $email): bool
{
    $sql = "SELECT * FROM users WHERE usersUsername = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=internalStmtFailure");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        return false;
    }

    mysqli_stmt_close($stmt);
}
#[NoReturn] function createUser($conn, $username, $email, $password) {
    $sql = "INSERT INTO users (usersUsername, usersEmail, usersPassword) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=internalStmtFailure");
        exit();
    }

    # $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();

}
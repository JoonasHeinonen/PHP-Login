<?php
    if (isset($_POST['signup-submit'])) {
        require 'dbh_inc.php';

        $username = $_POST['username'];
        $email = $_POST['mail'];
        $password = $_POST['password'];
        $passwordRepeat = $_POST['password-repeat'];

        if (empty($username) || empty($email) || empty($password
            || empty($passwordRepeat))) {
            header("Location: ../signup.php?error=emptyfields&username="
                .$username."&email=".$email);
            exit();
        } else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
            header("Location: ../signup.php?error=invalidmail&username");
            exit();
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: ../signup.php?error=invalidmail&username=".$username);
            exit();
        } else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
            header("Location: ../signup.php?error=invalidusername&mail=".$email);
            exit();
        } else if ($password !== $passwordRepeat) {
            header("Location: ../signup.php?error=passwordcheck&mail=".$email."&username=".$username);
            exit();
        }
        else {
            $sql = "SELECT usernameUsers FROM users WHERE usernameUsers=?";
            $stmt = mysqli_stmt_init($conn);

            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../signup.php?error=sqlerror");
                exit();
            } else {
                mysqli_stmt_bind_param($stmt, "s", $username);
                mysqli_stmt_execute($stmt);
            }
        }
    } 
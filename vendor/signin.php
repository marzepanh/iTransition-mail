<?php
    session_start();
    require_once 'connect.php';

    $login = $_POST['email'];
    $password = $_POST['password'];

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");
    $user = $check_user->fetch_assoc();

        if (!is_null($user) && password_verify($password, $user['password'])) {
            setcookie('user', $user['name'], time() + 3600, "/");
            header('Location: ../index.php');
        } else {
            $_SESSION['message'] = 'Wrong login or password';
            header('Location: ../public/signin.php');
        }


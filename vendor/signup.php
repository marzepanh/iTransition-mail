<?php
    session_start();
    require_once 'connect.php';

    $login = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $name = $_POST['name'];

    mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `login`, `password`)
        VALUES (NULL, '$name', '$login', '$password')");
    $_SESSION['message'] = "Successful registration. Log in now";

    header('Location: ../public/signin.php');
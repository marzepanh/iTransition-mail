<?php
    require_once 'connect.php';

    $sender = $_COOKIE['user'];
    $sendTo = $_POST['receiverName'];
    $subject = $_POST['subject'];
    $msg = $_POST['message'];
    $date = date('d.m.Y H:i');

    mysqli_query($connect, "INSERT INTO `messages` (`id`, `sender`, `sendTo`, `date`, `subject`, `message`)
            VALUES (NULL, '$sender', '$sendTo', '$date', '$subject', '$msg')");
    $message = [$sender, $date, $subject, $msg];

    header('Location: ../index.php');
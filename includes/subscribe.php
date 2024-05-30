<?php
session_start();
require "includes/database.inc.php";

$referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php

    if (isset($_GET['email']) && !empty($_GET['email'])) {
        $email = $_GET['email'];
        $sql1 = "SELECT * FROM subscribe WHERE email LIKE '$email'";
        $r = $conn->query($sql1);
        if ($r->num_rows > 0) {
            echo '<script>alert("ALREADY SUBSCRIBED !!"); window.location.href="' . $referrer . '";</script>';
        } else {
            $sql1 = "INSERT INTO subscribe (email) VALUES ('$email');";
            $r = $conn->query($sql1);
            echo '<script>alert("YOU SUBSCRIBED TO FABRIX!!"); window.location.href="' . $referrer . '";</script>';
        }
    } else {
        echo '<script>window.location.href="' . $referrer . '";</script>';
    }
    ?>
</body>

</html>
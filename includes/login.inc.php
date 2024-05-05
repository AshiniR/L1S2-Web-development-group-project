<?php
if (isset($_POST["submit"]) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $useremail = $_POST["email"];
    $userpassword = $_POST["password"];

    require_once 'database.inc.php';
    require_once 'functions.inc.php';
    if (emptyinputslogin($useremail, $userpassword) !== false) {
        header('Location:../login.php?error=Invalid');
        exit();
    }
    LoginUser($conn, $useremail, $userpassword);
} else {
    header('Location:../login.php');
    exit();
}

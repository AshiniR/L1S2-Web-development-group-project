<?php
if (isset($_POST["submit"])) {
    $username = $_POST["name"];
    $useremail = $_POST["email"];
    $userid = $_POST["uname"];
    $userpassword = $_POST["password"];
    $useragainpassword = $_POST["againpassword"];

    require_once 'database.inc.php';
    require_once 'functions.inc.php';

    $emptyInput = emptyInputSign($username, $useremail, $userid, $userpassword);
    $Invaliduserid = Invaliduserid($userid);
    $InvalidEmail = InvalidEmail($useremail);
    $Invalidpassword = Invalidpassword($userpassword, $useragainpassword);
    $UidExist = UidExist($conn, $username, $useremail);

    if ($emptyInput !== false) {
        header("Location:../sign.php?error=emptyinput");
        exit();
    }
    if ($Invaliduserid !== false) {
        header("Location:../sign.php?error=InvalidUserID");
        exit();
    }
    if ($InvalidEmail !== false) {
        header("Location:../sign.php?error=InvalidUserEmail");
        exit();
    }
    if ($Invalidpassword !== false) {
        header("Location:../sign.php?error=Invalidpassword");
        exit();
    }
    if ($UidExist !== false) {
        header("Location:../sign.php?error=UidExist");
        exit();
    }
    createuseraccount($conn, $username, $useremail, $userid, $userpassword);
} else {
    header('Location:../login.php');
    exit();
}

<?php
function emptyInputSign($username, $useremail, $userid, $userpassword)
{
    if (empty($username) || empty($useremail) || empty($userid) || empty($userpassword)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function Invaliduserid($userid)
{
    if (preg_match("/^[a-z A-Z 0-9]*$/", $userid)) {
        $result = false;
    } else {
        $result = true;
    }
    return $result;
}
function InvalidEmail($useremail)
{
    if (filter_var($useremail, FILTER_VALIDATE_EMAIL)) {
        $result = false;
    } else {
        $result = true;
    }
    return $result;
}
function Invalidpassword($userpassword, $useragainpassword)
{
    if ($userpassword !== $useragainpassword) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function UidExist($conn, $username, $useremail)
{
    $sql = "SELECT * FROM user WHERE Useruid= ? OR Useremail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:../sign.php?error=stmt_failed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $useremail);
    mysqli_stmt_execute($stmt);
    $resultdata = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultdata)) {
        return $row;
    } else {
        return false;
    }
    mysqli_stmt_close($stmt);
}
function createuseraccount($conn, $username, $useremail, $userid, $userpassword)
{
    $sql = "INSERT INTO user(Username,Useremail,Useruid,Userpassword) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:../sign.php?error=stmt_failed");
        exit();
    }
    $hashpassword = password_hash($userpassword, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $username, $useremail, $userid, $hashpassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location:../login.php");
    exit();
}
function emptyinputslogin($useremail, $userpassword)
{
    if (empty($useremail) || empty($userpassword)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function LoginUser($conn, $useremail, $userpassword)
{
    $UidExist = UidExist($conn, $useremail, $useremail);
    if ($UidExist === false) {
        header("location:../login.php?error=wronglogin");
        exit();
    }
    $hashpassword = $UidExist["Userpassword"];
    $checkpassword = password_verify($userpassword, $hashpassword);
    if ($checkpassword === false) {
        header("location:../login.php?error=wronglogin");
        exit();
    } else if ($checkpassword === true) {
        session_start();
        $_SESSION["userid"] = $UidExist["Userid"];
        $_SESSION["useruid"] = $UidExist["Useruid"];
        $_SESSION["username"] = $UidExist["Username"];
        header("location:../index.php");
    }
}

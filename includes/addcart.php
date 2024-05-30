<?php
require 'database.inc.php';
session_start();

$referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';

if (isset($_SESSION['useruid'])) {
    if (isset($_GET['count']) && !empty($_GET['count']) && isset($_GET['idd']) && !empty($_GET['idd'])) {
        $userID = $_SESSION['userid'];
        $id = $_GET['idd'];
        $sql = "SELECT * FROM usercart WHERE Userid=$userID AND item=$id;";
        $count = $_GET['count'];
        $res1 = $conn->query($sql);
        if ($res1) {
            if ($res1->num_rows > 0) {
                $row = mysqli_fetch_assoc($res1);
                $prev_count = $row['count'];
                $count = $count + $prev_count;
                $sql_ = "UPDATE usercart SET count = $count WHERE Userid=$userID AND item=$id;";
            } else {
                $sql_ = "INSERT INTO usercart (Userid, item,count) VALUES ($userID, $id, $count);";
            }
            $res2 = $conn->query($sql_);
            if ($res2) {
                echo "<script>alert('Added to the cart!!'); window.location.href = '$referrer';</script>";
            } else {
                echo "<script>alert('Something went wrong!!');window.location.href = '$referrer';</script>";
            }
        }
    } else {
        echo "<script>alert('Something went wrong!!');window.location.href = '$referrer';</script>";
    }
} else {
    echo "<script>alert('Please Log In !!');window.location.href = '$referrer';</script>";
}

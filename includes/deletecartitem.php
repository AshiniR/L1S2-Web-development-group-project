<?php
require 'database.inc.php';
session_start();

$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';

if (isset($_SESSION['useruid'])) {
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $userid = $_SESSION['userid'];
        $id = $_GET['id'];
        $sql = "DELETE FROM usercart WHERE Userid=$userid AND item=$id;";
        $result = $conn->query($sql);
        if ($result) {
            echo "<script>alert('Item deleted from the cart!!');window.location.href = '$referer';</script>";
        } else {
            echo "<script>alert('Something went wrong!!');window.location.href = '$referer';</script>";
        }
    }
} else {
    echo "<script>alert('Something went wrong!!');window.location.href = '$referer';</script>";
}

<?php
include('assets/inc/initDb.php');
global $db;
session_start();

$user_check = $_SESSION['login_user'];

$row = DB::queryFirstRow("select * from users where email = '$user_check' ");

$login_session_email = $row['email'];
$login_session_username = $row['name'];
$login_session_id = $row['id'];
$login_session_img_url = $row['img'];

// Set the session variables
$_SESSION['name'] = $login_session_username; // Use the correct variable here
$_SESSION['email'] = $login_session_email;
//$_SESSION['img'] = $login_session_img_url;

if (!isset($_SESSION['user_id'])) {
    header("location:login.php");
    die();
}
?>

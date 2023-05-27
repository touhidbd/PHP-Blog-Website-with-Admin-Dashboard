<?php
session_start();
include('config/dbcon.php');

if (!isset($_SESSION['auth'])) {
    $_SESSION['message'] = "Login first to access the dashboard!";
    $_SESSION['alert'] = "danger";
    header("Location: ../login.php");
    exit(0);
} else {
    if ($_SESSION['auth_role'] == 1) {

    } else {
        $_SESSION['message'] = "You are not authorised as admin!";
        $_SESSION['alert'] = "danger";
        header("Location: ../index.php");
        exit(0);
    }
}
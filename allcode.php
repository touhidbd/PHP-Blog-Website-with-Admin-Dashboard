<?php
session_start();

if (isset($_POST['logout_button'])) {
    // session_destroy();
    unset($_SESSION['auth']);
    unset($_SESSION['auth_role']);
    unset($_SESSION['auth_user']);

    $_SESSION['message'] = "Logged out successfully!";
    $_SESSION['alert'] = "success";
    header("Location: index.php");
    exit(0);
}
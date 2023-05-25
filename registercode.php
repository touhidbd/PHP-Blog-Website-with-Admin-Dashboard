<?php
session_start();
include('admin/config/dbcon.php');

if (isset($_POST['register_button'])) {
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

    $md5password = md5($password);

    if ($password == $cpassword) {
        //check email
        $checkemail = "SELECT email FROM users WHERE email='$email'";
        $checkemail_run = mysqli_query($con, $checkemail);

        if (mysqli_num_rows($checkemail_run) > 0) {
            $_SESSION['message'] = 'Email is already exists!';
            $_SESSION['alert'] = 'danger';
            header("Location: register.php");
            exit(0);
        } else {
            $user_query = "INSERT INTO users (fname,lname,email,password) VALUES ('$fname', '$lname', '$email', '$md5password')";
            $user_query_run = mysqli_query($con, $user_query);

            if ($user_query_run) {
                $_SESSION['message'] = 'User Registered successfully, Please login!';
                $_SESSION['alert'] = 'success';
                header("Location: login.php");
                exit(0);
            } else {
                $_SESSION['message'] = 'Something went wrong!';
                $_SESSION['alert'] = 'danger';
                header("Location: register.php");
                exit(0);
            }
        }
    } else {
        $_SESSION['message'] = 'Password and confirm password not match!';
        $_SESSION['alert'] = 'danger';
        header("Location: register.php");
        exit(0);
    }
} else {
    header("Location: register.php");
    exit(0);
}
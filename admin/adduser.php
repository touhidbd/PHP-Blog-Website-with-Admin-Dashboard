<?php
include('authentication.php');

if(isset($_POST['add_button'])){
    
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    $role_as = mysqli_real_escape_string($con, $_POST['role_as']);

    if ($password == $cpassword) {

        $md5password = md5($password);

        //check email
        $checkemail = "SELECT email FROM users WHERE email='$email'";
        $checkemail_run = mysqli_query($con, $checkemail);

        if (mysqli_num_rows($checkemail_run) > 0) {
            $_SESSION['message'] = 'Email is already exists!';
            $_SESSION['alert'] = 'danger';
            header("Location: add-register.php");
            exit(0);
        } else {
            $user_query = "INSERT INTO users (fname, lname, email, password, role_as) VALUES ('$fname', '$lname', '$email', '$md5password', '$role_as')";
            $user_query_run = mysqli_query($con, $user_query);

            if ($user_query_run) {
                $_SESSION['message'] = 'User Registered successfully.';
                $_SESSION['alert'] = 'success';
                header("Location: view-register.php");
                exit(0);
            } else {
                $_SESSION['message'] = 'Something went wrong!';
                $_SESSION['alert'] = 'danger';
                header("Location: add-register.php");
                exit(0);
            }
        }
    } else {
        $_SESSION['message'] = 'Password and confirm password not match!';
        $_SESSION['alert'] = 'danger';
        header("Location: add-register.php");
        exit(0);
    }
}
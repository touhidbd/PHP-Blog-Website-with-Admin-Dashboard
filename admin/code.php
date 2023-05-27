<?php
include('authentication.php');

if(isset($_POST['update_button'])) {

    $user_id = $_POST['user_id'];
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $role_as = mysqli_real_escape_string($con, $_POST['role_as']);
    $status = mysqli_real_escape_string($con, $_POST['status']) == true ? 1:0;

    $md5password = md5($password);

    $query = "UPDATE users SET fname='$fname', lname='$lname', email='$email',  role_as='$role_as', status='$status' WHERE id='$user_id'";

    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = "User updated successfully!";
        $_SESSION['alert'] = 'success';
        header("Location: view-register.php");
        exit(0);
    } else {        
        $_SESSION['message'] = "Something went wrong!";
        $_SESSION['alert'] = 'danger';
        header("Location: edit-register.php?id=".$user_id);
        exit(0);
    }
}
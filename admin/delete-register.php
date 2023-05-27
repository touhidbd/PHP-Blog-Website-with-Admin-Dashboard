<?php
include('authentication.php');

if(isset($_POST['delete_button'])){    

    $user_id = $_POST['user_id'];

    $query = "DELETE FROM users WHERE id='$user_id'";

    $query_run =  mysqli_query($con, $query);
    
    if($query_run) {
        $_SESSION['message'] = 'User/Admin deleted successfully.';
        $_SESSION['alert'] = 'success';
        header("Location: view-register.php");
        exit(0);
    } else {
        $_SESSION['message'] = 'Something went wrong: ';
        $_SESSION['alert'] = 'danger';
        header("Location: view-register.php");
        exit(0);
    }
}
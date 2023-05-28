<?php
include('authentication.php');

// Add category
if(isset($_POST['add_category'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $slug = mysqli_real_escape_string($con, $_POST['slug']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $meta_title = mysqli_real_escape_string($con, $_POST['meta_title']);
    $meta_description = mysqli_real_escape_string($con, $_POST['meta_description']);
    $meta_keyword = mysqli_real_escape_string($con, $_POST['meta_keyword']);
    $navbar_status = $_POST['navbar_status'] == true ? '1':'0';
    $status = $_POST['status'] == true ? '1':'0';

    // check slug
    $check_slug = "SELECT slug FROM categories WHERE slug='$slug'";
    $check_slug_run = mysqli_query($con, $check_slug);

    if(mysqli_num_rows($check_slug_run) > 0) {
        $_SESSION['message'] = 'Your input slug already added category!';
        $_SESSION['alert'] = 'danger';
        header("Location: add-category.php");
        exit(0);              
    } else {
        $query = "INSERT INTO categories (name, slug, description, meta_title, meta_description, meta_keyword, navbar_status, status) VALUES ('$name', '$slug', '$description', '$meta_title', '$meta_description', '$meta_keyword', '$navbar_status', '$status')";

        $query_run = mysqli_query($con, $query);

        if($query_run) {
            $_SESSION['message'] = 'Category added successfully.';
            $_SESSION['alert'] = 'success';
            header("Location: view-category.php");
            exit(0);
        } else {
            $_SESSION['message'] = 'Something went wrong!';
            $_SESSION['alert'] = 'danger';
            header("Location: add-category.php");
            exit(0);
        }  
    }


}

// Delete Category
if(isset($_POST['category_delete_button'])) {
    $category_id = $_POST['category_id'];
    $query = "UPDATE categories SET status='1' WHERE id='$category_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = 'Category archived successfully.';
        $_SESSION['alert'] = 'success';
        header("Location: view-category.php");
        exit(0);
    } else {
        $_SESSION['message'] = 'Something went wrong!';
        $_SESSION['alert'] = 'danger';
        header("Location: add-category.php");
        exit(0);
    }
}

// Update Category
if(isset($_POST['update_category'])){

    $category_id =  $_POST['category_id'];

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $slug = mysqli_real_escape_string($con, $_POST['slug']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $meta_title = mysqli_real_escape_string($con, $_POST['meta_title']);
    $meta_description = mysqli_real_escape_string($con, $_POST['meta_description']);
    $meta_keyword = mysqli_real_escape_string($con, $_POST['meta_keyword']);
    $navbar_status = $_POST['navbar_status'] == true ? '1':'0';
    $status = $_POST['status'] == true ? '1':'0';

    $query = "UPDATE categories SET name='$name', slug='$slug', description='$description', meta_title='$meta_title', meta_description='$meta_description', meta_keyword='$meta_keyword', navbar_status='$navbar_status', status='$status' WHERE id='$category_id'";

    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = 'Category update successfully.';
        $_SESSION['alert'] = 'success';
        header("Location: edit-categroy.php?id=".$category_id);
        exit(0);
    } else {
        $_SESSION['message'] = 'Something went wrong!';
        $_SESSION['alert'] = 'danger';
        header("Location: edit-categroy.php?id=".$category_id);
        exit(0);
    } 
}
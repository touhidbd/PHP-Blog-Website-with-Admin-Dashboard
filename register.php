<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">

                <?php include('message.php'); ?>

                <div class="card">
                    <div class="card-header text-center">
                        <h2>Register</h2>
                    </div>
                    <div class="card-body">
                        <form action="registercode.php" method="POST">
                            <div class="form-group mb-3">
                                <label class="mb-2">First Name:</label>
                                <input type="text" class="form-control" name="fname" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="mb-2">Last Name:</label>
                                <input type="text" class="form-control" name="lname" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="mb-2">Email:</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="mb-2">Password:</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="mb-2">Confirm Password:</label>
                                <input type="password" class="form-control" name="cpassword" required>
                            </div>
                            <div class="form-group mb-3">
                                <button class="btn btn-md btn-success" type="submit" name="register_button">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>

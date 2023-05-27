<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
if (isset($_SESSION['auth'])) {
    if (!isset($_SESSION['message'])) {
        $_SESSION['message'] = "You are already logged in";
        $_SESSION['alert'] = "warning";
    }
    header("Location: index.php");
    exit(0);
}
?>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">

                <?php include('message.php'); ?>

                <div class="card">
                    <div class="card-header text-center">
                        <h2>LOGIN</h2>
                    </div>
                    <div class="card-body">
                        <form action="logincode.php" method="POST">
                            <div class="form-group mb-3">
                                <label class="mb-2">Email:</label>
                                <input type="email" class="form-control mb-3" name="email" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="mb-2">Password:</label>
                                <input type="password" class="form-control mb-3" name="password" required>
                            </div>
                            <div class="form-group mb-3">
                                <button class="btn btn-md btn-success" type="submit" name="login_button">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>

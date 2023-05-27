<?php
include('authentication.php');
include('includes/header.php');
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">    

        <?php include('includes/sidebar.php'); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include('includes/navbar.php'); ?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Users</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <?php include('../message.php'); ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="mb-0">Edit User</h3>
                                </div>
                                <div class="card-body">

                                    <?php
                                    $user_id = $_GET['id'];
                                    $user = "SELECT * FROM users WHERE id='$user_id' LIMIT 1";
                                    $user_query = mysqli_query($con, $user);

                                    if (mysqli_num_rows($user_query) > 0) {
                                    foreach ($user_query as $data) {
                                        $fname = $data['fname'];
                                        $lname = $data['lname'];
                                        $email = $data['email'];
                                        $password = $data['password'];
                                        $role_as = $data['role_as'];
                                        $status = $data['status'];
                                    ?>
                                        <form action="code.php" method="POST">
                                            <input type="hidden" name="user_id" value="<?= $data['id']; ?>">
                                            <div class="form-group mb-3">
                                                <label for="">First Name</label>
                                                <input type="text" name="fname" value="<?= $fname; ?>" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Last Name</label>
                                                <input type="text" name="lname" value="<?= $lname; ?>" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Email</label>
                                                <input type="email" name="email" value="<?= $email; ?>" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Password</label>
                                                <input type="password" name="passowrd" value="" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Role</label>
                                                <select name="role_as" class="form-control">
                                                    <option value="0" <?= $role_as == 0 ? 'selected' : '' ?>>User</option>
                                                    <option value="1" <?= $role_as == 1 ? 'selected' : '' ?>>Admin</option>
                                                </select>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" id="blocked" name="status" <?= $status == 1 ? 'checked' : '' ?>>
                                                <label class="form-check-label" for="blocked">Blocked</label>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success" name="update_button">Update</button>
                                            </div>
                                        </form>
                                        <?php
                                        }
                                    } else {
                                        ?>
                                            <h4>No Rocord Found.</h4>
                                        <?php
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
        </div>

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">Ã—</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
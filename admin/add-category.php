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
                        <h1 class="h3 mb-0 text-gray-800">Categories</h1>
                    </div>

                    <?php include('../message.php'); ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="mb-0">Add Category</h3>
                                </div>
                                <div class="card-body">
                                    <form action="categorycode.php" method="POST">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="">Name</label>
                                                    <input type="text" name="name" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="">Slug</label>
                                                    <input type="text" name="slug" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Description</label>
                                            <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                                        </div>         
                                        <hr class="my-5">                             
                                        <div class="form-group mb-3">
                                            <label for="">Meta Title</label>
                                            <input type="text" name="meta_title" class="form-control">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">   
                                                <div class="form-group mb-3">
                                                    <label for="">Meta Description</label>
                                                    <textarea name="meta_description" id="" cols="30" rows="10" class="form-control"></textarea>
                                                </div>                                                 
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="">Meta Keyword</label>
                                                    <textarea name="meta_keyword" id="" cols="30" rows="10" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="mt-5"> 
                                        <div class="row">
                                            <div class="col-md-3 col-lg-2">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="navbar_status" name="navbar_status">
                                                    <label class="form-check-label" for="navbar_status">Navbar Status</label>
                                                </div>                                                
                                            </div>
                                            <div class="col-md-3 col-lg-2">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="status" name="status">
                                                    <label class="form-check-label" for="status">Hidden</label>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <hr class="mt-0"> 
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success" name="add_category">Add Category</button>
                                        </div>
                                    </form>

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
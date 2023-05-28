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
                                    <h3 class="mb-0">Edit Category</h3>
                                </div>
                                <?php 
                                    $cat_id = $_GET['id'];
                                    $query = "SELECT * FROM categories WHERE id='$cat_id' LIMIT 1";
                                    $query_run = mysqli_query($con, $query);
                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach($query_run as $category) {
                                            $name = $category['name'];
                                            $slug = $category['slug'];
                                            $description = $category['description'];
                                            $meta_title = $category['meta_title'];
                                            $meta_description = $category['meta_description'];
                                            $meta_keyword = $category['meta_keyword'];
                                            $navbar_status = $category['navbar_status'];
                                            $status = $category['status'];
                                        }
                                    }
                                ?>
                                <div class="card-body">
                                    <form action="categorycode.php" method="POST">
                                        <input type="hidden" name="category_id" value="<?php echo $cat_id; ?>">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="">Name</label>
                                                    <input type="text" name="name" class="form-control" value="<?= $name; ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="">Slug</label>
                                                    <input type="text" name="slug" class="form-control" value="<?= $slug; ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Description</label>
                                            <textarea name="description" id="" cols="30" rows="10" class="form-control" required><?= $description; ?></textarea>
                                        </div>         
                                        <hr class="my-5">                             
                                        <div class="form-group mb-3">
                                            <label for="">Meta Title</label>
                                            <input type="text" name="meta_title" class="form-control" value="<?= $meta_title; ?>">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">   
                                                <div class="form-group mb-3">
                                                    <label for="">Meta Description</label>
                                                    <textarea name="meta_description" id="" cols="30" rows="10" class="form-control"><?= $meta_description; ?></textarea>
                                                </div>                                                 
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-3">
                                                    <label for="">Meta Keyword</label>
                                                    <textarea name="meta_keyword" id="" cols="30" rows="10" class="form-control"><?= $meta_keyword; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="mt-5"> 
                                        <div class="row">
                                            <div class="col-md-3 col-lg-2">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="navbar_status" name="navbar_status" <?= $navbar_status == 1 ? 'checked':''; ?>>
                                                    <label class="form-check-label" for="navbar_status">Navbar Status</label>
                                                </div>                                                
                                            </div>
                                            <div class="col-md-3 col-lg-2">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox" id="status" name="status" <?= $status == 1 ? 'checked':''; ?>>
                                                    <label class="form-check-label" for="status">Hidden</label>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <hr class="mt-0"> 
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success" name="update_category">Update Category</button>
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
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="/">PHP BLOG</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php if (isset($_SESSION['auth_user'])) {
                        echo $_SESSION['auth_user']['user_name'];
                    } else {
                        echo 'Account';
                    } ?></a>
                    <ul class="dropdown-menu dropdown-menu-lg-end">
                    <?php if (isset($_SESSION['auth_user'])): ?>
                        <?php if ($_SESSION['auth_role'] == 1): ?>
                                        <li><a class="dropdown-item" href="admin/index.php">Dashboard</a></li>
                        <?php endif; ?>
                        <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                        <li>
                            <form action="allcode.php" method="post">
                                <button class="dropdown-item" type="submit" name="logout_button">Logout</button>
                            </form>
                        </li>
                    <?php else: ?>
                        <li><a class="dropdown-item" href="login.php">Login</a></li>
                        <li><a class="dropdown-item" href="register.php">Register</a></li>
                    <?php endif; ?>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
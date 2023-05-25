<?php
if (isset($_SESSION['message'])) {
    ?>
    <div class="alert alert-<?= $_SESSION['alert']; ?> text-center" role="alert">
        <?= $_SESSION['message']; ?>
    </div>
    <?php
    unset($_SESSION['message']);
    unset($_SESSION['alert']);
}
?>
<div class="col-md-3 text-end">
    <?php
    if (isset($_SESSION["newsession"])) {
        include "./partials/component_logged_user.php";
    } else {
        include "./partials/component_unlogged_user.php";
    }
    ?>
</div>
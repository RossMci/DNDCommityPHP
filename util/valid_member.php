<?php
    // make sure the user is logged in as a valid member
    if (!isset($_SESSION['is_valid_member'])) {
        header("Location: ." );
    }
?>
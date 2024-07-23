<?php
// functions.php
function check_login() {
    session_start();
    if (!isset($_SESSION['admin_id'])) {
        header("Location: login.php");
        exit();
    }
}

function sanitize_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}


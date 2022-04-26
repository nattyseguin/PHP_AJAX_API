<?php
// You'd put this code at the top of any "protected" page you create

// Always start this first
session_start();

if ( !isset( $_SESSION['user_id'] ) ) {
    // Redirect them to the login page
    header("Location: y-login.html");
}
?>
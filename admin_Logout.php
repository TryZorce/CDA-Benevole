<?php
session_start();

// Destroy the session
session_destroy();

// Redirect the user to the login page
header('Location: ./admin_Login.php');
exit();
?>

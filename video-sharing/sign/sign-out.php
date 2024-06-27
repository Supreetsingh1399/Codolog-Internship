<?php
session_start(); // Start the session.
session_unset(); // Unset all session variables.
session_destroy(); // Destroy the session.
header('Location: ../sign/sign-in.php'); // Redirect to sign-in page or homepage.
exit();
?>
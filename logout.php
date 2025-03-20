<?php
session_start();
session_destroy(); // Destroy the session
header("Location: Home.php"); // Redirect to the login screen
exit();
?>

<?php
session_start();
if (!isset($_SESSION['userRole'])) {
    header("Location: index.php");
    exit;
}
echo "Welcome Admin! You are on the admin page.";
echo "Hello " . htmlspecialchars($_SESSION['username']) . " (" . $_SESSION['userRole'] . ")<br>";

?>

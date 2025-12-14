<?php
session_start();

if (!isset($_SESSION['userRole'])) {
    header("Location: index.php");
    exit;
}

echo "Welcome User! You are on the user page.<br>";
echo "Hello " . htmlspecialchars($_SESSION['username']) . " (" . $_SESSION['userRole'] . ")<br>";
?>

<form method="POST" action="logout.php">
    <button type="submit">Logout</button>
</form>

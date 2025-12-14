<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];

    $_SESSION['username'] = $username;
if ($username === 'admin') {
    $_SESSION['userRole'] = 'admin';
    header("Location: admin.php");
} else {
    $_SESSION['userRole'] = 'user';
    header("Location: user.php");
}
exit; 


}
?>



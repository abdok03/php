<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $url = $_GET['url'];

    if (!preg_match("/^https?:\/\//", $url)) {
        $url = "https://" . $url;
    }

    header("Location: " . $url);
    exit;
}
?>

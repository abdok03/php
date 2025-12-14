<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo"Data sent using post";
    echo " email :".$_POST["email"]."<br>";
    echo "password".$_POST["password"]."<br>";
}else if($_SERVER["REQUEST_METHOD"] == "Get"){
    echo"Data sent using get";
    echo "email :".$_POST["email"]."<br>";
    echo "password".$_POST["password"]."<br>";
}
?>
 <?php
session_start();
 $_SESSION['username'] = 'username "is admin"';
if (!empty($_POST['username'])) {
  echo "Hello " . htmlspecialchars($_POST['username']);
 }
 if (isset($_SESSION['username'])) {
  echo " " . $_SESSION['username'];
}

?> 
<!-- 
// echo "PHP Version: " . phpversion();
// phpinfo();
// echo"<br>";
// echo "Tomorrow I'll learn PHP global variables.<br>";
// echo "This is a bad command: del c:\\*.*";
// echo "<br>";
// echo $_SERVER['REMOTE_ADDR'];
// echo '<br>';
// echo basename($_SERVER['PHP_SELF']);
// echo '<br>';
// $url = "https://www.w3schools.com/php/default.asp";
// print_r(parse_url($url));
// echo "<br>";
// $string = "PHP Tutorial";
// echo "<span style='color:red'>" . $string[0] . "</span>" . substr($string, 1);
// echo "<br>";
// header("Location: https://www.w3schools.com/");
// exit; -->
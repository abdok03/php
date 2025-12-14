<?php
// $html = "<html><body>
// <ul>
//   <li>html</li>
//   <li>css</li>
//   <li>php</li>
// </ul>
// </body></html>";


// $dom = new DOMDocument();
// $dom->loadHTML($html);

// $liList = $dom->getElementsByTagName("li");
// foreach ($liList as $li) {
//     echo $li->nodeValue . "<br>";
    
// }

// $newEl = $dom->createElement("h1", "this is my lang");
// $body = $dom->getElementsByTagName("body")->item(0);
// $body->appendChild($newEl);

// echo "<hr>";
// echo $dom->saveHTML();
// $rli = $dom->getElementsByTagName("li")->item(1);
// $rli->parentNode->removeChild($rli);
// echo $dom->saveHTML();
session_start();
$_SESSION["userRole"] = "admin";
echo"user role is " . $_SESSION["userRole"] ;
header("Location: aa.php");
exit();
?>

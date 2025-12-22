<?php

$str = "hello world";

$str = ucfirst($str);

echo $str; 
echo "<br>";
$str = "hello world from php";

$str = ucwords($str);

echo $str; 
echo "<br>";

$dateString = "202512"; 

$hour  = substr($dateString, 0, 2);
$min = substr($dateString, 2, 2);
$sec   = substr($dateString, 4, 2);

$formattedDate = $hour . ":" . $min . ":" . $sec;

echo $formattedDate;
echo "<br>";
$p="I am a full stack developer at orange coding academy";
$word="orange";
if(str_contains($p,$word)){
    echo " the word '$word' is found ";
    
}else {
    echo " the word '$word' is not found ";
}
echo "<br>";
$url='www.orange.com/index.php';
$file_name=basename($url);
echo $file_name;
echo"<br>";


$email = "abdullah@example.com";

$username = strstr($email, "@", true);
echo $username; 
echo "<br>";
$lest=substr($email,-3);
echo $lest;
echo "<br>";
$characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$passwordLength = 8;
$shuffled = str_shuffle($characters);
$password = substr($shuffled, 0, $passwordLength);
echo $password;
echo "<br>";

$sentence = "Hello world, welcome to PHP";
$newWord = "Hi";

$newSentence = preg_replace('/^\w+/', $newWord, $sentence);

echo $newSentence; 

echo "<br>";
$string1 = "dragonball";
$string2 = "dragonboll";

$length = min(strlen($string1), strlen($string2));
$position = null;

for ($i = 0; $i < $length; $i++) {
    if ($string1[$i] != $string2[$i]) {
        $position = $i + 1; 
        $char1 = $string1[$i];
        $char2 = $string2[$i];
        break;
    }
}

if ($position !== null) {
    echo "First difference between two strings at position $position: \"$char1\" vs \"$char2\"";
} else {
    echo "Strings are identical up to the length of the shorter string.";
}
echo "<br>";
$string = "Twinkle, twinkle, little star.";

$array = preg_split('/(, )/', $string, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);

$result = [];
$temp = "";
foreach ($array as $part) {
    if (strpos($part, ",") !== false) {
        $temp .= $part;
        $result[] = $temp;
        $temp = "";
    } else {
        $temp .= $part;
    }
}
if (!empty($temp)) {
    $result[] = $temp;
}

var_dump($result);

echo "<br>";
$letter = "c";

$nextLetter = chr(ord($letter) + 1);    

echo "Next letter after '$letter' is '$nextLetter'";
echo "<br>";
?>

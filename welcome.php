<?php
// $name="Abdullah";
// $age=25;
// $arr=["footbal","swimming","basketball"];
// $hoobies= implode(", ", $arr);
// define ("work", "web devloper ");
// const pi=3.14;
// echo "my name is $name and I am $age years old and my fav $hoobies pi=". pi ." and my work " ;
// print_r($arr);
// $number=50;
// $isAdmin=true;
// $isEditor= false;
// if($number>18 && $number<=60)
// {
//     echo "your age is $number ";
// if($isAdmin||$isEditor){
//     echo"welcome to bacend";
// }
// else if($isAdmin){
//     echo "welcome Admin";
    
// }
// }
// $person=array(
//     ["Abdullah",22,"Jordan"],
//     ["kiswani",23,"Plestain"]
// );
// echo $person[0][2];
// $name=" Abdulla Alokosh ";
// echo strlen($name);

// $name=trim($name);
// echo strpos($name,"A",5);
// echo substr($name,8);

$abd=array(
    ["MR a",1000],
    ["MR b",1200],
    ["MR c", 1400],
  ["MR d", 1400]
);
$fill="es.php";

if(file_exists($fill)){
    $_SESSION["lastModified"]=
    "last modified". date("jS F,Y,h:ia",filemtime($fill));
}else{
    $_SESSION["lastModified"]="file not found";
}
$fileName = "es.php";  

if(file_exists($fileName)){
    $lines = file($fileName);

    $lineCount = count($lines);

    echo "The file '$fileName' has $lineCount lines.";
} else {
    echo "File '$fileName' does not exist.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Table</title>
    <style>
        table {
            border-collapse: collapse; 
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px 12px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Simple HTML Table</h2>

<table>
    <tr>
        <th>Name</th>
        <th>Salary</th>
    </tr>
    <?php
foreach($abd as $row){
    echo '<tr>
            <td>'.$row[0].'</td>
            <td>'.$row[1].'</td>
          </tr>';
}
?>
</table>
<p style="text-align:center;"><?php echo $_SESSION["lastModified"]; ?></p>

</body>
</html>

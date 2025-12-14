<?php
session_start();

if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

if (isset($_POST['add'])) {
    $task = trim($_POST['task']);
    if (!empty($task)) {
        $_SESSION['tasks'][] = $task;
    }
}

if (isset($_GET['delete'])) {
    $index = $_GET['delete'];
    unset($_SESSION['tasks'][$index]);
    $_SESSION['tasks'] = array_values($_SESSION['tasks']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>To Do List</title>
</head>
<body>

<h2>My To Do List</h2>

<form method="post">
    <input type="text" name="task" placeholder="Enter new task">
    <input type="submit" name="add" value="Add">
</form>

<ul>
<?php
foreach ($_SESSION['tasks'] as $index => $task) {
    echo "<li>$task 
            // <a href='?delete=$index'>❌</a>
          </li>";
}

echo "Project Name: " . basename(dirname($_SERVER['SCRIPT_NAME'])) . "<br>";
echo "Script Name: " . basename($_SERVER['SCRIPT_NAME']);
echo "Page requested time: " ;
echo date("Y-m-d H:i:s", $_SERVER['REQUEST_TIME']);

?>
</ul>
</body>
</html>

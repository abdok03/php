<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>

<form method="post">
    <input type="number" name="num1" placeholder="First Number" required>
    <input type="number" name="num2" placeholder="Second Number" required>

    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>

    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op   = $_POST['operation'];

    switch ($op) {
        case '+':
            $result = $num1 + $num2;
            break;

        case '-':
            $result = $num1 - $num2;
            break;

        case '*':
            $result = $num1 * $num2;
            break;

        case '/':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Cannot divide by zero";
            }
            break;
    }

    echo "<h3>Result: $result</h3>";
}
?>

</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator 5</title>
</head>

<body>
    <form method="post">
        @csrf
        <input type="text" name="num1" placeholder="number 1">
        <input type="text" name="num2" placeholder="number 2">
        <select name="operator">
            <option>None</option>
            <option>add</option>
            <option>substract</option>
            <option>multiply</option>
            <option>divide</option>
        </select>
        <br>
        <button type="submit" name="submit" value="submit">calculate</button>
    </form>
    <p>the answer is:</p>
    <?php
    if (isset($_POST['submit'])) {
        $result1 = $_POST['num1'];
        $result2 = $_POST['num2'];
        $operator = $_POST['operator'];
        switch ($operator) {
            case "None":
                echo "You need to select a method";
                break;
            case "add":
                echo $result1 + $result2;
                break;
            case "substract":
                echo $result1 - $result2;
                break;
            case "multiply":
                echo $result1 * $result2;
                break;
            case "divide":
                echo $result1 / $result2;
                break;
        }
    }
    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator 5</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    @include('navbar') <!-- Include navbar -->
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stylish Calculator</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #ff9a9e 0%, #fad0c4 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .calculator-container {
            background-color: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
            text-align: center;
            animation: fadeIn 1.5s ease-in-out;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h1 {
            font-size: 28px;
            color: #333;
            margin-bottom: 25px;
        }

        .form-control, .btn, .form-select {
            margin-bottom: 15px;
            border-radius: 50px;
            border: none;
            background-color: #f5f5f5;
            padding: 10px 20px;
        }

        .btn {
            background-color: #ff6f61;
            color: white;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #ff3b30;
        }

        .answer {
            font-size: 22px;
            color: #ff6f61;
            margin-top: 20px;
        }

        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    @include('navbar') <!-- Include navbar -->

    <div class="calculator-container">
        <h1>Stylish Calculator</h1>
        <form method="post">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control" name="num1" placeholder="Enter number 1">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="num2" placeholder="Enter number 2">
            </div>
            <div class="mb-3">
                <select class="form-select" name="operator">
                    <option selected>Select Operation</option>
                    <option value="add">Add</option>
                    <option value="substract">Subtract</option>
                    <option value="multiply">Multiply</option>
                    <option value="divide">Divide</option>
                </select>
            </div>
            <button type="submit" class="btn w-100" name="submit" value="submit">Calculate</button>
        </form>
        <p class="answer">
            The answer is:
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
        </p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

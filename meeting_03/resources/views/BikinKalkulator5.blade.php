<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator 5</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #74ebd5, #ACB6E5);
            height: 100vh;
        }

        .card {
            border-radius: 20px;
        }

        .btn-custom {
            background-color: #6c63ff;
            color: white;
            border-radius: 30px;
        }

        .btn-custom:hover {
            background-color: #574b90;
        }

        .form-control, .form-select {
            border-radius: 30px;
        }

        h2 {
            font-family: 'Poppins', sans-serif;
            font-weight: bold;
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow-lg border-0 p-4">
                    <div class="card-header bg-transparent text-center">
                        <h2 class="text-dark">Simple Calculator 5</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="">
                            @csrf
                            <div class="mb-4">
                                <input type="text" class="form-control form-control-lg" name="num1" placeholder="Enter Number 1" required>
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control form-control-lg" name="num2" placeholder="Enter Number 2" required>
                            </div>
                            <div class="mb-4">
                                <select class="form-select form-select-lg" name="operator" required>
                                    <option selected disabled>Choose Operation</option>
                                    <option value="add">Add</option>
                                    <option value="substract">Subtract</option>
                                    <option value="multiply">Multiply</option>
                                    <option value="divide">Divide</option>
                                </select>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-custom btn-lg" name="submit" value="submit">Calculate</button>
                            </div>
                        </form>

                        <div class="mt-4 text-center">
                            <h4>Result:</h4>
                            <p class="lead text-dark">
                                <?php
                                if (isset($_POST['submit'])) {
                                    $result1 = $_POST['num1'];
                                    $result2 = $_POST['num2'];
                                    $operator = $_POST['operator'];

                                    if (!is_numeric($result1) || !is_numeric($result2)) {
                                        echo "Please enter valid numbers.";
                                    } else {
                                        switch ($operator) {
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
                                                if ($result2 == 0) {
                                                    echo "Cannot divide by zero.";
                                                } else {
                                                    echo $result1 / $result2;
                                                }
                                                break;
                                            default:
                                                echo "Please select a valid operation.";
                                        }
                                    }
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

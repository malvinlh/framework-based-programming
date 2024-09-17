<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator 3</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-secondary text-white">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow border-0">
                    <div class="card-body bg-dark text-white rounded">
                        <h2 class="text-center mb-4">Simple Calculator 3</h2>
                        <form method="GET" action="" class="d-flex justify-content-between align-items-center">
                            <div class="input-group">
                                <input type="number" class="form-control" placeholder="Enter first number" name="n1" required>
                            </div>

                            <div class="col-md-2">
                                <select name="operand" class="form-select" required>
                                    <option value="+" selected>+</option>
                                    <option value="-">-</option>
                                    <option value="x">x</option>
                                    <option value="/">/</option>
                                </select>
                            </div>

                            <div class="input-group">
                                <input type="number" class="form-control" placeholder="Enter second number" name="n2" required>
                            </div>

                            <div class="ms-3">
                                <button type="submit" class="btn btn-warning">Calculate</button>
                            </div>
                        </form>

                        <div class="mt-4">
                            <?php
                            if ($_GET) {
                                $n1 = $_GET['n1'];
                                $n2 = $_GET['n2'];
                                $operand = $_GET['operand'];
                                switch ($operand) {
                                    case '+':
                                        $e = $n1 + $n2;
                                        break;
                                    case '-':
                                        $e = $n1 - $n2;
                                        break;
                                    case 'x':
                                        $e = $n1 * $n2;
                                        break;
                                    case '/':
                                        $e = $n1 / $n2;
                                        break;
                                }
                                echo '<div class="alert alert-success mt-3">';
                                echo $n1 . ' ' . $operand . ' ' . $n2 . ' = ' . $e;
                                echo '</div>';
                            }
                            ?>
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

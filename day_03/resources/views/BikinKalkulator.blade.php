<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header text-center bg-primary text-white">
                <h1>Simple Calculator</h1>
            </div>
            <div class="card-body">
                <form action="" method="get" class="row g-3">
                    @csrf
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Nilai A" id="nilaia" name="nilaia">
                    </div>

                    <div class="col-md-4">
                        <select class="form-select" name="operator" id="operator">
                            <option value="" selected>Operator</option>
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Nilai B" id="nilaib" name="nilaib">
                    </div>

                    <div class="col-12 text-center">
                        <input type="submit" class="btn btn-primary w-100" name="submit" value="Calculate">
                    </div>
                </form>

                <div class="mt-4">
                    <?php
                    if ($_GET) {
                        echo '<p>Nilai A : ' . htmlspecialchars($_GET['nilaia']) . '</p>';
                        echo '<p>Nilai B : ' . htmlspecialchars($_GET['nilaib']) . '</p>';
                        echo '<p>Operator : ' . htmlspecialchars($_GET['operator']) . '</p>';
                        if ($_GET['operator']) {
                            $result = 0;
                            if ($_GET['operator'] == '+') {
                                $result = $_GET['nilaia'] + $_GET['nilaib'];
                            } else if ($_GET['operator'] == '-') {
                                $result = $_GET['nilaia'] - $_GET['nilaib'];
                            } else if ($_GET['operator'] == '*') {
                                $result = $_GET['nilaia'] * $_GET['nilaib'];
                            } else if ($_GET['operator'] == '/') {
                                $result = $_GET['nilaia'] / $_GET['nilaib'];
                            }
                            echo '<div class="alert alert-info mt-3">Hasil: ' . $result . '</div>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

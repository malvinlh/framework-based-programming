<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator 2</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-white">
    @include('navbar') <!-- Include navbar -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm rounded-lg">
                    <div class="card-header bg-info text-white text-center rounded-top">
                        <h2>Simple Calculator 2</h2>
                    </div>
                    <div class="card-body p-4">
                        <form action="get_calc_2_submit" method="GET">
                            @csrf
                            <div class="mb-3">
                                <input type="number" class="form-control form-control-lg" placeholder="Enter First Number" id="nilaia" name="nilaia" required>
                            </div>
                            <div class="mb-3">
                                <select class="form-select form-select-lg" name="operator" id="operator" required>
                                    <option value="" selected>Choose Operator</option>
                                    <option value="+">+</option>
                                    <option value="-">-</option>
                                    <option value="*">*</option>
                                    <option value="/">/</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <input type="number" class="form-control form-control-lg" placeholder="Enter Second Number" id="nilaib" name="nilaib" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-info btn-lg">Calculate</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
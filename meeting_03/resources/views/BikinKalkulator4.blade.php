<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator 4</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-lg border-0">
                    <div class="card-header text-center bg-success text-white">
                        <h2>Simple Calculator</h2>
                    </div>
                    <div class="card-body">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="/kalkulator4" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input type="number" class="form-control form-control-lg" placeholder="Enter First Number" name="nilaia" value="{{ old('nilaia') }}" required>
                            </div>

                            <div class="mb-3">
                                <select class="form-select form-select-lg" name="operator" required>
                                    <option value="" selected disabled>Choose Operator</option>
                                    <option value="+" {{ old('operator') == '+' ? 'selected' : '' }}>+</option>
                                    <option value="-" {{ old('operator') == '-' ? 'selected' : '' }}>-</option>
                                    <option value="*" {{ old('operator') == '*' ? 'selected' : '' }}>*</option>
                                    <option value="/" {{ old('operator') == '/' ? 'selected' : '' }}>/</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <input type="number" class="form-control form-control-lg" placeholder="Enter Second Number" name="nilaib" value="{{ old('nilaib') }}" required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-success btn-lg">Calculate</button>
                            </div>
                        </form>

                        @if(isset($result))
                            <div class="alert alert-info text-center mt-4">
                                <h4>Result: {{ $n1 }} {{ $operator }} {{ $n2 }} = {{ $result }}</h4>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

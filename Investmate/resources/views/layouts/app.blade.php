<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'InvestMate') }}</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <div class="auth-container d-flex min-vh-100">
        <!-- Left Panel -->
        <div class="auth-left p-5 text-white d-flex flex-column justify-content-between">
            <div>
                <img src="{{ asset('css/images/logo.png') }}" alt="Logo" class="logo mb-4" style="width: 130px;">
                <h5 class="fw-semibold mt-4" style="line-height: 1.5;">
                    Create. Connect.<br>
                    Grow — you’re just moments away with <br>InvestMate.
                </h5>
            </div>

            <div class="illustration-container d-flex justify-content-center align-items-end">
                @yield('illustration')
            </div>
        </div>

        <!-- Right Panel -->
        <div class="auth-right d-flex align-items-center justify-content-center bg-light p-5">
            <div class="auth-form-box w-100" style="max-width: 430px;">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

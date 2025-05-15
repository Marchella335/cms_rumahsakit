<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Sakit Cepat Sembuh</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f9ff;
        }
        .navbar {
            background-color: #007bff;
        }
        .navbar-brand {
            color: #fff !important;
        }
        .footer {
            background-color: #e9ecef;
            padding: 10px;
            text-align: center;
            font-size: 14px;
            color: #6c757d;
        }
    </style>
</head>
<body>

    @include('partials.navbar')

    <div class="container py-4">
        @yield('content')
    </div>

    <div class="footer mt-auto">
        &copy; {{ date('Y') }} Rumah Sakit Cepat Sembuh. Semua Hak Dilindungi.
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

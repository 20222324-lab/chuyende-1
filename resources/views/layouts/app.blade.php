<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl4kK+K9Q9Lg2v4q6W2i5lFri1rXTwRCY7YyZl6tWtIaxVXM4m5" crossorigin="anonymous">
    <style>
        body {
            background: #eef2f7;
        }
        .app-shell {
            min-height: calc(100vh - 88px);
            padding-bottom: 60px;
        }
        .app-content {
            background: #ffffff;
            border: 1px solid #d7dae0;
            border-radius: 18px;
            box-shadow: 0 18px 45px rgba(15, 23, 42, 0.08);
            padding: 32px;
        }
        .section-card {
            border: 1px solid #e3e8ee;
            border-radius: 16px;
            background: #fbfdff;
            padding: 24px;
        }
        .section-card + .section-card {
            margin-top: 1.5rem;
        }
        .form-group-box {
            border: 1px solid #e3e8ee;
            border-radius: 14px;
            padding: 20px;
            background: #ffffff;
            margin-bottom: 1rem;
        }
        .form-group-box .form-label {
            font-weight: 600;
        }
        .table td {
            border: 2px solid #e3e8ee !important;
            border-radius: 8px;
            margin: 4px;
            background: #ffffff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }
        .table th {
            border: none !important;
            background: #f8f9fa;
            font-weight: 600;
        }
        .table {
            border: none !important;
        }
        .action-btn {
            border: 2px solid !important;
            border-radius: 8px !important;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1) !important;
            transition: all 0.2s ease !important;
        }
        .action-btn:hover {
            transform: translateY(-1px) !important;
            box-shadow: 0 4px 8px rgba(0,0,0,0.15) !important;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('products.index') }}">Quản lý kho</a>
        </div>
    </nav>

    <div class="container app-shell">
        @if(session('success'))
            <div class="alert alert-success rounded-4 shadow-sm">
                {{ session('success') }}
            </div>
        @endif

        <div class="app-content">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-ST4/UEbX+6d9a6aXgk8M2o/eK2mr9W/D6hkeQKQ+CmQf8wzP3Kfg3hU1f2wX9WDS" crossorigin="anonymous"></script>
</body>
</html>

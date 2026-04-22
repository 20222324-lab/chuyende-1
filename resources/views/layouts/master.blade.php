<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl4kK+K9Q9Lg2v4q6W2i5lFri1rXTwRCY7YyZl6tWtIaxVXM4m5" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <header class="mb-4">
            <h1>HEADER</h1>
        </header>

        @if(session('success'))
            <x-alert message="{{ session('success') }}" />
        @endif

        @yield('content')

        <footer class="mt-5 bg-light text-center py-4">
            <div class="container">
                <p class="mb-0">&copy; 2026 Quản lý kho. All rights reserved.</p>
            </div>
        </footer>
    </div>
</body>
</html>

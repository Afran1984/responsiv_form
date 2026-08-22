<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">

    {{-- Header --}}
    @include('layouts.navbar')

    {{-- Main About Content --}}
    <main class="container py-5 text-center">
        <h1 class="fw-bold">About Us</h1>
        <p class="lead text-muted">This is the about page located inside the home-sections folder.</p>
    </main>

    {{-- Footer --}}
    @include('layouts.footer')

</body>
</html>
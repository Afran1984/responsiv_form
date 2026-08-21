<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">
   <!-- Navbar -->
 @include('layouts.navbar')

 <!-- Banner-Section  -->
@include('home-sections.hero')

  <!-- Features Section  -->
@include('home-sections.features')

<!-- Call to Action Section  -->
 @include('home-sections.cta')

 <!-- footer section  -->
  @include('layouts.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <title>Portfolio</title>

      <!-- Favicons -->
  <link href="{{ asset("img/favicon.png")}}" rel="icon">
  <link href="{{ asset("img/apple-touch-icon.png")}}" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="{{ asset("vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
  <link href="{{ asset("vendor/bootstrap-icons/bootstrap-icons.css")}}" rel="stylesheet">
  <link href="{{ asset("vendor/glightbox/css/glightbox.min.css")}}" rel="stylesheet">
  <link href="{{ asset("vendor/swiper/swiper-bundle.min.css")}}" rel="stylesheet">

  <link href="{{ asset("css/style.css")}}" rel="stylesheet">






</head>
<body>

    @yield('content')








    <!-- Vendor JS Files -->
  <script src="{{ asset("vendor/purecounter/purecounter.js")}}"></script>
  <script src="{{ asset("vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
  <script src="{{ asset("vendor/glightbox/js/glightbox.min.js")}}"></script>
  <script src="{{ asset("vendor/swiper/swiper-bundle.min.js")}}"></script>
  <script src="{{ asset("vendor/typed.js/typed.min.js")}}"></script>
  <script src="{{ asset("vendor/php-email-form/validate.js")}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset("js/main.js")}}"></script>

</body>
</html>

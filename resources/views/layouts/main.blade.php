<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    <link href="assets/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/aos/aos.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
    
    <title>Judul</title>
  </head>
  <body data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
    @include('layouts.navbar')

    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
      
      @yield('mainpage')
    </div>

    @include('layouts.footer')


    <script src="assetss/js/app.js"></script>
    <script src="{{ asset('assets/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/aos/aos.js') }}"></script>
    <script src="assets/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
    

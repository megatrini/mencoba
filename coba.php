<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
{{-- my css --}}
<link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
{{-- font --}}
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;600&display=swap" rel="stylesheet">
{{-- end --}}
    <title>Bayangan Samar</title>
  </head>
  <body>
 {{-- navbar --}}
 <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand" href="#">Bayangan Samar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">Kutipan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">#BicaraLuka</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">Kontak Kami</a>
        </li>

    </div>
  </div>
</nav>
 {{-- end navbar --}}

{{-- jumbotron --}}
 <section class="jumbotron text-center">
   <img src="{{asset('/assets/img/ava.jpg')}}" alt="Bayangan Samar"  >
  <h1 class="display-4">Bayangan Samar</h1>
  <p class="lead">Ada namun tak dianggap, karena aku tak terlihat dengan jelas. Aku adalah Bayangan.</p>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#000000" fill-opacity="0.75" d="M0,96L34.3,90.7C68.6,85,137,75,206,90.7C274.3,107,343,149,411,176C480,203,549,213,617,234.7C685.7,256,754,288,823,298.7C891.4,309,960,299,1029,266.7C1097.1,235,1166,181,1234,181.3C1302.9,181,1371,235,1406,261.3L1440,288L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
 </section>
{{-- end jumbotron --}}
{{-- tentang kami --}}
<section id="tentangkami">
  <div class = "container">
    <div class="row text-center">
    <div class="col">
    <h2> Tentang Kami </h2>
    </div>
  </div>
  <div class="row justify-content-center text-center">
    <div class="col"></div>
    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur perferendis enim molestiae laborum obcaecati optio voluptatum corporis maxime repellat deleniti itaque, odit exercitationem ipsum consequuntur impedit minima praesentium dolorem adipisci.</p>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#404040" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,101.3C672,75,768,53,864,53.3C960,53,1056,75,1152,90.7C1248,107,1344,117,1392,122.7L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
  </div>
    </div>
   
</section>
{{-- end tentang kami --}}
{{--  --}}
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>

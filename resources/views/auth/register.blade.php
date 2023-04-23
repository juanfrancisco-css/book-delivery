<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title>Book&Delivery</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

  <!-- CDN boostrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
 
</head>

<body class="sub_page">
 
<div class="hero_area">
    <div class="bg-box">
      <img src="images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
   @include('layouts.navbar')
    <!-- end header section -->
  </div> 

  <!-- Formulario de Registro -->
<section class="form-register">
@if ($errors->any())
    <div class="alert alert-danger">
        <p>Por favor, corrige los siguientes errores:</p>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('registrarse') }} " method="POST">
  @csrf  <!-- Token es necesario -->
<h1>Create una cuenta rápida y fácil</h1>
<div class="form-floating mb-3">
  <input type="text" class="form-control" name="name" id="name" placeholder="Nombre">
  <label for="username">Nombre</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control"  name="surname" id="surname" placeholder="Apellidos">
  <label for="surname">Apellidos</label>
</div>
<div class="form-floating mb-3">
  <input type="email" class="form-control"  name="email" id="email" placeholder="Email">
  <label for="email">Email</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control"   name="username" id="username" placeholder="Nombre de Usuario">
  <label for="username">Nombre de Usuario</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control"   name="phone" id="phone" placeholder="Telefono">
  <label for="username">Telefono</label>
</div>
<div class="form-floating mb-3">
  <input type="password" class="form-control"  name="password" id="password" placeholder="Password">
  <label for="password">Password</label>
</div>
<div class="form-floating mb-3">
  <input type="password" class="form-control"   name="password_confirmation" id="password" placeholder="Verificar Password">
  <label for="password">Verificar Password</label>
</div>
<a href=" {{ route ('login')}}">Ya tienes una cuenta </a><br>
  <button type="submit" class="btn btn-primary">Craer Cuenta</button>
  
</form>
</section>
<!-- fin del registro-->

 <!-- footer section -->
 <footer class="footer_section">
    <div class="container">
    @include('layouts.footer')
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

  <!--CDN de boostrap-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link href="{{ url('custom/css/estilos.css') }}" rel="stylesheet">
   <!-- <link rel="StyleSheet" href="{{ url('assets/css/bootstrap.min.css')}}">-->
</head>
<body>
  <header>
@include('layouts.nav')
</header>
<section>
<form>
<h1>Bienvenido </h1>
<p>Inicia sesión con nosotros para distrufar de todos nuestros servicios </p>

<div class="form-floating mb-3">
  <input type="email" class="form-control" id="email" placeholder="Email o Username">
  <label for="email">Email o Username</label>
</div>
<div class="form-floating mb-3">
  <input type="password" class="form-control" id="password" placeholder="Password">
  <label for="password">Password</label>
</div>
<a href=" {{ route ('suscribirse')}}">Crear una cuenta </a><br>
  <button type="submit" class="btn btn-primary">Iniciar Sesión</button>

</form>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="{{ url('custom/js/miApp.js') }}"></script>   
</body>
</html>



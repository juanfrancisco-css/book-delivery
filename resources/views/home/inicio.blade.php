@extends('app-master')
@section('content')
<h1>Inicio </h1>

@auth
    
    <h3>Bienvenido {{ auth()->user()->name ?? auth()->user()->username }}  a  Book & Delivery  </h3> 
    <p> Productos </p>
@endauth

@guest
    <a href="{{ route('registrarse')}}">Create una cuenta para disfrutar más de nuestros servicios </a>
@endguest

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos obcaecati magnam molestias, saepe praesentium est voluptate, ea commodi quae sit atque totam laborum deleniti dolorum et necessitatibus eius aperiam aspernatur!</p>
@endsection
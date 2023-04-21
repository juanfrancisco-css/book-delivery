<nav>
<ul class="nav nav-underline menu-nav">
  <li class="nav-item">
    <a class="nav-link " aria-current="page" href="{{ route('inicio') }}">Inicio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href=" {{ route('contenido1') }}">Contenido 1</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Contenido 2</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled">Contenido 3 </a>
  </li>
@auth
        <li class="nav-item">
          <a class="nav-link " href="#">Contenido 4</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">Contenido 5 </a>
        </li>
@endauth
</ul>
</nav>


<div class="card" style="width: 18rem;">
  <div class="card-header">
    @auth
    {{  auth()->user()->username }}
    @endauth
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Carrito</li>
    <li class="list-group-item">Reservas</li>
    <li class="list-group-item">Salir</li>
  </ul>
</div>
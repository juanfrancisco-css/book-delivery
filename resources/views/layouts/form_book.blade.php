<div class="heading_container">
        <h2>
         Hacer una Reserva
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form action="">
              <div>
                <input type="text" class="form-control" placeholder="Nombre" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Numero telefonico" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" />
              </div>
              <div>
                <select class="form-control nice-select wide">
                  <option value="" disabled selected>
                  ¿Cuántas personas?
                  </option>
                  <option value="">
                    2
                  </option>
                  <option value="">
                    3
                  </option>
                  <option value="">
                    4
                  </option>
                  <option value="">
                    5
                  </option>
                </select>
              </div>
              <div>
                <input type="date" class="form-control">
              </div>
              <div class="btn_box">
                @auth
                <button  type="button" onclick="">  
                Hacer una reserva
                </button>
                @endauth
                @guest
                <!-- agregar modal -->
                <!-- Button trigger modal -->
<button type="button" onclick="alert('Debes de  iniciar sesión para solicitar una reserva ')">
  Hacer  una reserva 1
</button>



               
                @endguest
                
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container ">
            <div id="googleMap"></div>
           
            </div>
        </div>
      </div>
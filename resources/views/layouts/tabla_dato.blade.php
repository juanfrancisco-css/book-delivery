
<h1>Datos Personales</h1>
@auth
    
<form  class="form-table">
    <div class="row g-3 needs-validation" novalidate>
  <div class=" col-6 col-sm-4">
    <label for="validationCustom01" class="form-label">Nombre </label>
    <input type="text" class="form-control" id="validationCustom01" value=" {{  auth()->user()->name  }} " >
  </div>
</div>

  <div class="col-6 col-sm-4 ">
    <label for="validationCustom02" class="form-label">Apellidos</label>
    <input type="text" class="form-control" id="surname"  value=" {{  auth()->user()->surname  }} " >
   
  </div>


  <div class="col-6 col-sm-4">
    <label for="validationCustomUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="username" aria-describedby="inputGroupPrepend" value=" {{  auth()->user()->username  }} " >
      <div class="invalid-feedback">
       @error('username')
           <p>Ya existe ese usuario </p>
       @enderror
      </div>
    </div>
  </div>


  <div class="col-6 col-sm-4">
    <label for="validationCustom02" class="form-label">Email</label>
    <input type="email" class="form-control" id="surname"  value=" {{  auth()->user()->email  }} ">
   
  </div>
  <div class="col-6 col-sm-4">
    <label for="validationCustom02" class="form-label">Telefono</label>
    <input type="email" class="form-control" id="surname"  value=" {{  auth()->user()->phone  }} " >
   
  </div>


  <div class="col-6 col-sm-4">
    <label for="validationCustom02" class="form-label">Clave</label>
    <input type="password" class="form-control" id="surname"   value=" {{  auth()->user()->password  }} " >
   
  </div>
<br>
  <div class="col-12">
  <button class="btn btn-primary" type="submit">Modificar </button>
  <button class="btn btn-danger" type="submit">Cancelar</button>
 
  </div>
</div>
</form>
@endauth
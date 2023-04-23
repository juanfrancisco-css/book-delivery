
<table>
    <tr>
    <th>Nombre</th>

    <td>
@auth
    {{  auth()->user()->name  }} 
@endauth
</td>
</tr>
<tr>
    <th>Apellidos</th>

    <td>
@auth
    {{  auth()->user()->surname }} 
@endauth
</td>
</tr>
<tr>
    <th>username</th>

    <td>
@auth
    {{  auth()->user()->username  }} 
@endauth
</td>
</tr>
<tr>
    <th>Email</th>

    <td>
@auth
    {{  auth()->user()->email  }} 
@endauth
</td>
</tr>
</table>
@auth
    

<form >
    <div class="row g-3 needs-validation" novalidate>
  <div class=" col-6 col-sm-4">
    <label for="validationCustom01" class="form-label">Nombre </label>
    <input type="text" class="form-control" id="validationCustom01" value=" {{  auth()->user()->name  }} " disabled>
   
  </div>
  
  <div class="col-6 col-sm-4 ">
    <label for="validationCustom02" class="form-label">Apellidos</label>
    <input type="text" class="form-control" id="surname"  value=" {{  auth()->user()->surname  }} " disabled>
   
  </div>


  <div class="col-6 col-sm-4">
    <label for="validationCustomUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="username" aria-describedby="inputGroupPrepend" value=" {{  auth()->user()->username  }} " disabled>
      <div class="invalid-feedback">
       @error('username')
           <p>Ya existe ese usuario </p>
       @enderror
      </div>
    </div>
  </div>


  <div class="col-6 col-sm-4">
    <label for="validationCustom02" class="form-label">Email</label>
    <input type="email" class="form-control" id="surname"  value=" {{  auth()->user()->email  }} " disabled>
   
  </div>
  <div class="col-6 col-sm-4">
    <label for="validationCustom02" class="form-label">Telefono</label>
    <input type="email" class="form-control" id="surname"  value=" {{  auth()->user()->phone  }} " disabled>
   
  </div>


  <div class="col-6 col-sm-4">
    <label for="validationCustom02" class="form-label">Clave</label>
    <input type="password" class="form-control" id="surname"   value=" {{  auth()->user()->password  }} " disabled>
   
  </div>

  <div class="col-12">
    <button class="btn btn-primary" type="submit">Modificar </button>
  </div>
</div>
</form>
@endauth
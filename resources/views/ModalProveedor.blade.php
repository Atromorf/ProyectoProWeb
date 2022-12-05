
<!-- Modal -->
<div class="modal fade" id="ModalProveedor" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalProveedor" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Actualiza tu recuerdo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('prov.store')}}">
          @csrf

          <div class="mb-2 text-gray-600 dark:text-gray-400 text-sm">
              <input class="form-control" type="text" name="txtEmpresa" placeholder="Empresa">

              <p class="text-danger  fst-italic"> {{ $errors->first('txtEmpresa') }} </p>
          </div>

          <div class="mb-3">
              <input class="form-control" type="text" name="txtDireccion" placeholder="Direccion">
              <p class="text-danger  fst-italic"> {{ $errors->first('txtDireccion') }} </p>
          </div>
          <div class="mb-3">
            <input class="form-control" type="text" name="txtPais" placeholder="Pais">
            <p class="text-danger  fst-italic"> {{ $errors->first('txtPais') }} </p>
          </div>
          <div class="mb-3">
            <input class="form-control" type="number" name="txtNumFijo" placeholder="Numero Fijo">
            <p class="text-danger  fst-italic"> {{ $errors->first('txtNumFijo') }} </p>
          </div>
          <div class="mb-3">
            <input class="form-control" type="number" name="txtNumCelular" placeholder="Numero Celular">
            <p class="text-danger  fst-italic"> {{ $errors->first('txtNumCelular') }} </p>
          </div>
          <div class="mb-3">
            <input class="form-control" type="email" name="txtCorreo" placeholder="Correo Electronico">
            <p class="text-danger  fst-italic"> {{ $errors->first('txtCorreo') }} </p>
          </div>
          
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-warning">Agregar Proveedor</button>
      </div>
    </form>
    </div>
  </div>
</div>
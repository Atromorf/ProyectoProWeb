@foreach($resultProv as $prov)
<!-- Modal -->
<div class="modal fade" id="ModalActualizarP{{$prov->idProveedor}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalActualizarP{{$prov->idProveedor}}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Actualiza Proveedor</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{route('prov.update',$prov->idProveedor)}}">
                @csrf
                @method('PUT')

                <div class="mb-2 text-gray-600 dark:text-gray-400 text-sm">
                    <input class="form-control" type="text" name="txtEmpresa" value="{{$prov->empresa}}" placeholder="Empresa">

                    <p class="text-danger  fst-italic"> {{ $errors->first('txtEmpresa') }} </p>
                </div>

                <div class="mb-3">
                    <input class="form-control" type="text" name="txtDireccion" value="{{$prov->direccion}}" placeholder="Direccion">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtDireccion') }} </p>
                </div>

                <div class="mb-3">
                    <input class="form-control" type="text" name="txtPais" value="{{$prov->pais}}" placeholder="Pais">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtPais') }} </p>
                </div>

                <div class="mb-3">
                    <input class="form-control" type="number" name="txtNumFijo" value="{{$prov->num_fijo}}" placeholder="Numero Fijo">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtNumFijo') }} </p>
                </div>

                <div class="mb-3">
                    <input class="form-control" type="number" name="txtNumCelular" value="{{$prov->num_celular}}" placeholder="Numero de Celular">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtNumCelular') }} </p>
                </div>

                <div class="mb-3">
                    <input class="form-control" type="email" name="txtCorreo" value="{{$prov->correo}}" placeholder="Correo">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtCorreo') }} </p>
                </div>
            
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-warning">Actualizar Proveedor</button>
        </div>
      </form>
      </div>
    </div>
  </div>
@endforeach
@foreach($resultCom as $vista)
<!-- Modal -->
<div class="modal fade" id="ModalActualizarC{{$vista->idComic}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalActualizarC{{$vista->idComic}}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Actualiza Comic</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{route('comic.update',$vista->idComic)}}">
                @csrf
                @method('PUT')

                <div class="mb-2 text-gray-600 dark:text-gray-400 text-sm">
                    <input class="form-control" type="text" name="txtComic" value="{{$vista->nombre}}" placeholder="Comic">

                    <p class="text-danger  fst-italic"> {{ $errors->first('txtComic') }} </p>
                </div>

                <div class="mb-3">
                    <input class="form-control" type="text" name="txtEdicion" value="{{$vista->edicion}}" placeholder="Edicion">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtEdicion') }} </p>
                </div>

                <div class="mb-3">
                    <input class="form-control" type="text" name="txtCompañia" value="{{$vista->compañia}}" placeholder="Compañia">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtCompañia') }} </p>
                </div>

                <div class="mb-3">
                    <input class="form-control" type="text" name="txtCantidad" value="{{$vista->cantidad}}" placeholder="Cantidad">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtCantidad') }} </p>
                </div>

                <div class="mb-3">
                    <input class="form-control" type="text" name="txtPrecioC" value="{{$vista->precioCompra}}" placeholder="Precio Compra">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtPrecioC') }} </p>
                </div>

                <div class="mb-3">
                    <input class="form-control" type="text" name="txtPrecioV" value="{{$vista->precioVenta}}" placeholder="Precio Venta">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtPrecioV') }} </p>
                </div>
            
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-warning">Actualizar recuerdo</button>
        </div>
      </form>
      </div>
    </div>
  </div>
@endforeach
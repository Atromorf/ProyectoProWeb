@foreach($resultArt as $vistaso)
<!-- Modal -->
<div class="modal fade" id="ModalActualizarA{{$vistaso->idArticulo}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalActualizarA{{$vistaso->idArticulo}}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Actualiza Articulo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{route('articulo.update',$vistaso->idArticulo)}}">
                @csrf
                @method('PUT')

                <div class="mb-2 text-gray-600 dark:text-gray-400 text-sm">
                    <input class="form-control" type="text" name="txtTipo" value="{{$vistaso->tipo}}" placeholder="Comic">

                    <p class="text-danger  fst-italic"> {{ $errors->first('txtTipo') }} </p>
                </div>

                <div class="mb-3">
                    <input class="form-control" type="text" name="txtMarca" value="{{$vistaso->marca}}" placeholder="Edicion">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtMarca') }} </p>
                </div>

                <div class="mb-3">
                    <input class="form-control" type="text" name="txtDescripcion" value="{{$vistaso->descripcion}}" placeholder="Compañia">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtDescripcion') }} </p>
                </div>

                <div class="mb-3">
                    <input class="form-control" type="text" name="txtCantidadA" value="{{$vistaso->cantidad}}" placeholder="Cantidad">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtCantidadA') }} </p>
                </div>

                <div class="mb-3">
                    <input class="form-control" type="text" name="txtPrecioCA" value="{{$vistaso->precioCompra}}" placeholder="Precio Compra">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtPrecioCA') }} </p>
                </div>

                <div class="mb-3">
                    <input readonly class="form-control" type="text" name="txtPrecioVA" value="{{$vistaso->precioVenta}}" placeholder="Precio Venta">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtPrecioVA') }} </p>
                </div>
            
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Regresar</button>
          <button type="submit" class="btn btn-warning">Actualizar Articulo</button>
        </div>
      </form>
      </div>
    </div>
  </div>
@endforeach
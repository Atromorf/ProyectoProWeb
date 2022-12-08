@foreach($reportVent as $report)
<!-- Modal -->
<div class="modal fade" id="ModalEliminarR{{$report->idCarrito}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalEliminarR{{$report->idCarrito}}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Eliminar Producto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{route('reporte.destruir',$report->idCarrito)}}">
            @csrf
            @method('DELETE')
    
            <div class="mb-2 text-gray-600 dark:text-gray-400 text-sm" style="background-color:brown">
                <p class="text-white  fst-italic">{{$report->fecha}}</p>
            </div>

            <div class="mb-2 text-gray-600 dark:text-gray-400 text-sm" style="background-color:rgb(255, 255, 255)">
                {{$report->proveedor}}

            </div>
            <div class="mb-2 text-gray-600 dark:text-gray-400 text-sm" style="background-color:rgb(255, 255, 255)">
                {{$report->producto}}

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-danger">Si...,Borralo</button>
            </div>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Regresar</button>
        </div>
      </div>
    </div>
  </div>
@endforeach
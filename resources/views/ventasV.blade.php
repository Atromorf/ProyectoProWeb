@extends('loyout3')

@section('contenido')

@include('ModalEliminarV')

@if (session()->has('actual'))
    
    {!! "<script> Swal.fire(
        'Guardado correctamente!',
        'Tu Comic se actualizo satisfactoriamente!',
        'success'
        ) </script>" !!}

@endif

@if (session()->has('actualis'))
    
    {!! "<script> Swal.fire(
        'Guardado correctamente!',
        'Tu Articulo se actualizo satisfactoriamente!',
        'success'
        ) </script>" !!}

@endif

@if (session()->has('confirma'))
    
    {!! "<script> Swal.fire(
        'Eliminado correctamente!',
        'Tu Comic se elimino satisfactoriamente!',
        'success'
        ) </script>" !!}

@endif

@if (session()->has('confima'))
    
    {!! "<script> Swal.fire(
        'Eliminado correctamente!',
        'Tu Articulo se elimino satisfactoriamente!',
        'success'
        ) </script>" !!}

@endif

@if (session()->has('confina'))
    
    {!! "<script> Swal.fire(
        'Eliminado correctamente!',
        'Tu producto se elimino del carrito!',
        'success'
        ) </script>" !!}

@endif

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weirdo Comics</title>
    <link href="{{ asset('css/artic.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<h1>Articulos en carrito</h1>
<section class="busc">
  <form class="d-flex">
    <input name="buscarpor" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
  </form>
</section>
//
<table class="tablas">   
  <tbody>
      <tr>
        <th colspan="4" scope="rowgroup"><strong>Productos agregados</strong></th>
      </tr>
  <tr>
  @foreach($ventas as $vista)
  <td> <a>{{$vista->nombre}}</a></td>
  <td> <a>{{$vista->tipo}}</a></td>
  <td> <a>{{$vista->precio}}</a></td>
  <td> 
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalEliminarV{{$vista->idVentas}}">
      Eliminar
    </button>
  </td>
  </tr>   
  @endforeach
  </tbody>
</table>

<section class="agregand">
  <form action="{{route('ticket.PDF')}}">
    <button type="submit" class="btn btn-warning">Generar PDF <i class="bi bi-filetype-pdf"></i></a></button>
    </form>
 </section>

</body>

@stop

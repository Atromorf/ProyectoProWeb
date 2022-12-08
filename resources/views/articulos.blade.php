@extends('loyout0')

@section('contenido')

@include('ModalActualizarC')

@include('ModalEliminarC')

@include('ModalActualizarA')

@include('ModalEliminarA')

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

@if (session()->has('busca'))
    
    {!! "<script> Swal.fire(
        'No encontrado!',
        'El articulo o comic que buscas no existe!',
        'success'
        ) </script>" !!}

@endif

@if (session()->has('cart'))
    
    {!! "<script> Swal.fire(
        'Agregado al carrito!',
        'Tu comic esta en el carrito!',
        'success'
        ) </script>" !!}

@endif

@if (session()->has('cartun'))
    
    {!! "<script> Swal.fire(
        'Agregado al carrito!',
        'Tu articulo esta en el carrito!',
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
<h1>Productos Disponibles</h1>
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
        <td><strong>Nombre</strong></td>
  
        <td><strong>Edicion</strong></td>
    
        <td><strong>Compañia</strong></td>
  
        <td><strong>Cantidad</strong></td>
  
        <td><strong>Precio de compra</strong></td>
  
        <td><strong>Precio de venta</strong></td>
  
        <td><strong>Fecha de ingreso</strong></td>
  
        <td><strong>Opciones</strong></td>
      </tr>
  <tr>
  @foreach($resultCom as $vista)
  <td> <a>{{$vista->nombre}}</a></td>
  <td> <a>{{$vista->edicion}}</a></td>
  <td> <a>{{$vista->compañia}}</a></td>
  <td> <a>{{$vista->cantidad}}</a></td>
  <td> <a>{{$vista->precioCompra}}</a></td>
  <td> <a>{{$vista->precioVenta}}</a></td>
  <td> <a>{{$vista->fecha}}</a></td>
  <td> 
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalActualizarC{{$vista->idComic}}">
      Editar <i class="bi bi-pen"></i>
    </button>
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalEliminarC{{$vista->idComic}}">
      Eliminar <i class="bi bi-trash3-fill"></i>
    </button>
    <form action="{{route('ventas.cart', $vista->idComic)}}">
    <button type="submit" class="btn btn-warning">
      Agregar<i class="bi bi-cart"></i>
    </a></button>
    </form>
  </td>
  </tr>   
  @endforeach
  </tbody>


   </table>
   <table class="tablas">   
    <tbody>
        <tr>
          <td><strong>Tipo</strong></td>
    
          <td><strong>Marca</strong></td>
      
          <td><strong>Descripcion</strong></td>
    
          <td><strong>Cantidad</strong></td>
    
          <td><strong>Precio de compra</strong></td>
    
          <td><strong>Precio de venta</strong></td>
    
          <td><strong>Fecha de ingreso</strong></td>
    
          <td><strong>Opciones</strong></td>
        </tr>
    <tr>
    @foreach($resultArt as $vistaso)
    <td> <a>{{$vistaso->tipo}}</a></td>
    <td> <a>{{$vistaso->marca}}</a></td>
    <td> <a>{{$vistaso->descripcion}}</a></td>
    <td> <a>{{$vistaso->cantidad}}</a></td>
    <td> <a>{{$vistaso->precioCompra}}</a></td>
    <td> <a>{{$vistaso->precioVenta}}</a></td>
    <td> <a>{{$vistaso->fecha}}</a></td>
    <td> 
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalActualizarA{{$vistaso->idArticulo}}">
        Editar <i class="bi bi-pen"></i>
      </button>
      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalEliminarA{{$vistaso->idArticulo}}">
        Eliminar
      </button>
      <form action="{{route('ventas.cartun', $vistaso->idArticulo)}}">
        <button type="submit" class="btn btn-warning"><i class="bi bi-cart"></i></a></button>
        </form>
    </td>
    </tr>   
    @endforeach
    </tbody>
     </table>
</body>

@stop

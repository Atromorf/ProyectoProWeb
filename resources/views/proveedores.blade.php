@extends('loyout0')

@section('contenido')

@include('ModalProveedor')

@include('ModalActualizarP')

@include('ModalEliminarP')

@if (session()->has('confima'))
    
    {!! "<script> Swal.fire(
        'Eliminado correctamente!',
        'Tu Proveedor se elimino satisfactoriamente!',
        'success'
        ) </script>" !!}

@endif

@if (session()->has('actualis'))
    
    {!! "<script> Swal.fire(
        'Guardado correctamente!',
        'Tu Proveedor se actualizo satisfactoriamente!',
        'success'
        ) </script>" !!}

@endif

@if (session()->has('prove'))
    
    {!! "<script> Swal.fire(
        'Agregado correctamente!',
        'Tu Proveedor se agrego satisfactoriamente!',
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
<h1>Proveedores Disponibles</h1>
<section class="busc">
  <form class="d-flex">
    <input name="buscarpro" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
  </form>
</section>

<table class="tablas">   
  <tbody>
      <tr>
        <td><strong>Empresa</strong></td>
  
        <td><strong>Direccion</strong></td>
    
        <td><strong>Compañia</strong></td>
  
        <td><strong>Pais</strong></td>
  
        <td><strong>Numero Fijo</strong></td>
  
        <td><strong>Numero Celular</strong></td>
  
        <td><strong>Correo electronico</strong></td>
  
        <td><strong>Opciones</strong></td>
      </tr>
  <tr>
  @foreach($resultProv as $prov)
  <td> <a>{{$prov->empresa}}</a></td>
  <td> <a>{{$prov->direccion}}</a></td>
  <td> <a>{{$prov->pais}}</a></td>
  <td> <a>{{$prov->num_fijo}}</a></td>
  <td> <a>{{$prov->num_celular}}</a></td>
  <td> <a>{{$prov->correo}}</a></td>
  <td> <a>{{$prov->fecha}}</a></td>
  <td> 
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalActualizarP{{$prov->idProveedor}}">
      <i class="bi bi-pen"></i>
    </button>
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalEliminarP{{$prov->idProveedor}}">
      <i class="bi bi-backspace"></i>
    </button>
    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ModalEliminarC">
      <a href="{{ route('pedidos.index') }}"><i class="bi bi-envelope"></i></a>
    </button>
  </td>
  </tr>   
  @endforeach
  </tbody>
   </table>
   <section class="agregand">
   <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ModalProveedor" text-align="center">
    Agregar Proveedor <i class="bi bi-file-earmark-arrow-up"></i>
  </button>
  </section>
</body>

@stop

@extends('loyout0')

@section('contenido')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recetas</title>
    <link href="{{ asset('css/artic.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<h1>Proveedores Actuales</h1>
<section class="busc">
    <form action="/BuscaC" method="POST">
        Proveedor<input type="text" name="txtBusquedaD" /> Fecha de ingreso <input type="date" name="txtBusquedaDF" />
        <input type="submit" value="Buscar" />
    </form>
</section>
<table class="default">

    <tr>
  
      <th><strong>Nombre</strong></th>
  
      <th><strong>Productos</strong></th>
  
      <th><strong>Descuentos</strong></th>

      <th><strong>Traslado</strong></th>

      <th><strong>Opciones</strong></th>
  
    </tr>
  
    <tr>
  
      <td>MangaDogs</td>
  
      <td>Mangas</td>
  
      <td>30%</td>

      <td>Fedex</td>

      <td><a href=""><button type="button" class="btn btn-danger">Eliminar</button></a></td>
  
    </tr>
  
    <tr>

      <td>MangaDogs</td>
  
      <td>Mangas</td>
  
      <td>30%</td>

      <td>Fedex</td>

      <td><a href=""><button type="button" class="btn btn-danger">Eliminar</button></a></td>
  
    </tr>
  
    <tr>
  
      <td>MangaDogs</td>
  
      <td>Mangas</td>
  
      <td>30%</td>

      <td>Fedex</td>

      <td><a href=""><button type="button" class="btn btn-danger">Eliminar</button></a></td>
  
    </tr>

    <tr>
  
      <td>MangaDogs</td>
  
      <td>Mangas</td>
  
      <td>30%</td>

      <td>Fedex</td>

      <td><a href=""><button type="button" class="btn btn-danger">Eliminar</button></a></td>
    
      </tr>
    
      <tr>
  
        <td>MangaDogs</td>
  
        <td>Mangas</td>
    
        <td>30%</td>
  
        <td>Fedex</td>
  
        <td><a href=""><button type="button" class="btn btn-danger">Eliminar</button></a></td>
    
      </tr>
  
  </table>
</body>
@stop

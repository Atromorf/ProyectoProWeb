@extends('loyout3')

@section('contenido')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weirdo Comics</title>
    <link href="{{ asset('css/artic.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<h1>Productos Disponibles</h1>
<section class="busc">
    <form action="/BuscaC" method="POST">
        Comic<input type="text" name="txtBusquedaD" /> Articulo <input type="text" name="txtBusquedaDF" />
        <input type="submit" value="Buscar" />
    </form>
</section>
<table class="default">

    <tr>
  
      <th><strong>Nombre</strong></th>
  
      <th><strong>Cantidad</strong></th>
  
      <th><strong>Vendidos</strong></th>

      <th><strong>Foto</strong></th>

      <th><strong>Opciones</strong></th>
  
    </tr>
  
    <tr>
  
      <td>Spiderma</td>
  
      <td>22</td>
  
      <td>311</td>

      <td><img src="/IMG/bats.jpg"></td>

      <td><a href=""><button type="button" class="btn btn-primary">Vender</button></a></td>
  
    </tr>
  
    <tr>
  
      <td>Batman</td>
  
      <td>77</td>
  
      <td>1022</td>

      <td><img src="/IMG/bats.jpg"></td>

      <td><a href=""><button type="button" class="btn btn-primary">Vender</button></a></td>
  
    </tr>
  
    <tr>
  
      <td>God of war</td>
  
      <td>11</td>
  
      <td>1500</td>

      <td><img src="/IMG/bats.jpg"></td>

      <td><a href=""><button type="button" class="btn btn-primary">Vender</button></a></td>
  
    </tr>

    <tr>
  
        <td>Inuyasha</td>
    
        <td>1500</td>
    
        <td>215</td>

        <td><img src="/IMG/bats.jpg"></td>
  
        <td><a href=""><button type="button" class="btn btn-primary">Vender</button></a></td>
    
      </tr>
    
      <tr>
  
        <td>Acuaman</td>
    
        <td>18</td>
    
        <td>1800</td>

        <td><img src="/IMG/bats.jpg"></td>
  
        <td><a href=""><button type="button" class="btn btn-primary">Vender</button></a></td>
    
      </tr>
  
  </table>
</body>
@stop

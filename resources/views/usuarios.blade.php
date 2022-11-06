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
<h1>Empleados</h1>
<section class="busc">
    <form action="/BuscaC" method="POST">
        Nombre<input type="text" name="txtBusquedaD" /> Fecha de ingreso <input type="date" name="txtBusquedaDF" />
        <input type="submit" value="Buscar" />
    </form>
</section>
<table class="default">

    <tr>
  
      <th><strong>Nombre</strong></th>
  
      <th><strong>Telefono</strong></th>
  
      <th><strong>Correo</strong></th>

      <th><strong>Rol</strong></th>

      <th><strong>Ubicacion</strong></th>

      <th><strong>Fecha de nacimiento</strong></th>

      <th><strong>Contraseña</strong></th>

      <th><strong>Opciones</strong></th>
  
    </tr>
  
    <tr>
  
      <td>Maria</td>
  
      <td>123455</td>
  
      <td>wddq@gmail.com</td>

      <td>Admin</td>

      <td>Sidka</td>

      <td>11/12/2000</td>

      <td>311</td>

      <td><a href=""><button type="button" class="btn btn-primary">Editar</button></a>
        <a href=""><button type="button" class="btn btn-danger">Eliminar</button></a></td>
  
    </tr>
  
    <tr>

      <td>Pancho</td>
  
      <td>123455</td>
  
      <td>wddq@gmail.com</td>

      <td>Admin</td>

      <td>Sidka</td>

      <td>11/12/2000</td>

      <td>311</td>

      <td><a href=""><button type="button" class="btn btn-primary">Editar</button></a>
        <a href=""><button type="button" class="btn btn-danger">Eliminar</button></a></td>
  
    </tr>
  
    <tr>
  
      <td>Pansa</td>
  
      <td>123455</td>
  
      <td>wddq@gmail.com</td>

      <td>Admin</td>

      <td>Sidka</td>

      <td>11/12/2000</td>

      <td>311</td>

      <td><a href=""><button type="button" class="btn btn-primary">Editar</button></a>
        <a href=""><button type="button" class="btn btn-danger">Eliminar</button></a></td>
  
    </tr>

    <tr>
  
      <td>Cratos</td>
  
      <td>123455</td>
  
      <td>wddq@gmail.com</td>

      <td>Admin</td>

      <td>Sidka</td>

      <td>11/12/2000</td>

      <td>311</td>
  
        <td><a href=""><button type="button" class="btn btn-primary">Editar</button></a>
          <a href=""><button type="button" class="btn btn-danger">Eliminar</button></a></td>
    
      </tr>
    
      <tr>
  
        <td>Atreus</td>
  
        <td>123455</td>
    
        <td>wddq@gmail.com</td>
  
        <td>Admin</td>
  
        <td>Sidka</td>
  
        <td>11/12/2000</td>
  
        <td>311</td>
  
        <td><a href=""><button type="button" class="btn btn-primary">Editar</button></a>
          <a href=""><button type="button" class="btn btn-danger">Eliminar</button></a></td>
    
      </tr>
  
  </table>
</body>
@stop

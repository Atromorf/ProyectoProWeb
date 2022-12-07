<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weirdo Comics</title>
    <link rel="stylesheet" href="">
<head>
<body>
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
        </tr>   
        @endforeach
        </tbody>
      </table>
</body>
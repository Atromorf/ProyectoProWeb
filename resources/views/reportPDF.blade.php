<!DOCTYPE html>
<html lang="en">
  <!DOCTYPE html>
  <html lang="en">
  
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Weirdo Comics</title>
  </head>
  
<body>
  <h1 style="text-align: center;"><strong>Weido comics</strong></h1>
  <hr />
  <p style="text-align: center;">Reporte de ventas</p>
  <p style="text-align: center;">Reporte de ventas realizadas en la tienda</p>
  <p style="text-align: center;">Articulos vendidos</p>
  <p style="text-align: center;">&nbsp;</p>
  <div>
  @foreach($reporteVent as $reporte)
  </div>
  <p style="text-align: left;"><strong>Fecha de ingreso:</strong></p>
  <div><p style="text-align: left;">{{$reporte->fecha}}</p></div>
  <p style="text-align: left;"><strong>Nombre del producto:</strong></p>
  <div><p style="text-align: left;">{{$reporte->producto}}</p></div>
  <p style="text-align: left;"><strong>Proveedor:</strong></p>
  <div><p style="text-align: left;">{{$reporte->proveedor}}</p></div>
  <p style="text-align: left;"><strong>Precio de venta:</strong></p>
  <div><p style="text-align: left;">{{$reporte->precioVenta}}</p></div>
  @endforeach
  </div>
  </div>
</body>
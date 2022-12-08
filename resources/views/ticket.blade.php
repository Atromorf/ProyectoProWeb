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
  <p style="text-align: center;">Ticket de venta</p>
  <p style="text-align: center;">Gracias por su preferencia vuelva pronto</p>
  <p style="text-align: center;">Articulos comprados</p>
  <p style="text-align: center;">&nbsp;</p>
  <div>
  @foreach($ventas as $vista)
  </div>
  <p style="text-align: center;"><strong>Nombre del producto:</strong></p>
  <div><p style="text-align: center;">{{$vista->nombre}}</p></div>
  <p style="text-align: center;"><strong>Edicion o Marca:</strong></p>
  <div><p style="text-align: center;">{{$vista->tipo}}</p></div>
  <p style="text-align: center;"><strong>Precio</strong></p>
  <div><p style="text-align: center;">{{$vista->precio}}</p></div>
  @endforeach
  </div>
  </div>
</body>
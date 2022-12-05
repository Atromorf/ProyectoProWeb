<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Solicitud de pedido Weirdo Comics</title>

        <style>
            h1{
                color: rgb(243, 18, 18);
                font-size: 1.5em;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <h1>Correo de solicitud</h1>
        <p>Articulos o comics a solicitar</p>
        <p><strong>Nombre:</strong>{{$contacto['txtNombre']}}</p>
        <p><strong>Correo:</strong>{{$contacto['txtCorreo']}}</p>
        <p><strong>Mensaje:</strong>{{$contacto['txtMensaje']}}</p>
    </body>
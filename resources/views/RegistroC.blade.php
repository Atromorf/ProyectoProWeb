<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registro Comics</title>
    <link href="{{ asset('css/nusu.css') }}" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

@if (session()->has('registroC'))
    
    {!! "<script> Swal.fire(
        'Guardado correctamente!',
        'Articulo Registrado Correctamente!',
        'success'
        ) </script>" !!}

@endif

    <div class="box">
        <div class="form">
            <h2>Registro de Articulo</h2>
            <form method="POST" action="guardarArticulo">
                @csrf
                <div class="inputBox">
                    <input required class="form-control" type="text" name="txtComic" value="{{ old('txtComic') }}">
                    <span>Nombre del Comic</span>
                    <i></i>
                </div>
                <div class="errores">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtComic') }} </p>
                </div>
                <div class="inputBox">
                    <input type="number" required="required" name="txtCantidad" value="{{ old('txtCantidad') }}">
                    <span>En existencia</span>
                    <i></i>
                </div>
                <div class="errores">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtCantidad') }} </p>
                </div>
                <div class="inputBox">
                    <input type="number" required="required" name="txtVendidos" value="{{ old('txtVendidos') }}">
                    <span>Vendidos</span>
                    <i></i>
                </div>
                <div class="errores">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtVendidos') }} </p>
                </div>
                <div class="inputBox">
                    <input required class="form-control" type="text" name="txtImagen" value="{{ old('txtImagen') }}">
                    <span>Imagen del Articulo</span>
                    <i></i>
                </div>
                <div class="errores">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtImagen') }} </p>
                </div>
                <div class="inputBox">
                    <input required class="form-control" type="number" name="txtPrecio" value="{{ old('txtPrecio') }}">
                    <span>Precio del Articulo</span>
                    <i></i>
                </div>
                <div class="errores">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtPrecio') }} </p>
                </div>
                <div class="links">
                    <a href="AdminU">Regresar</a>
                </div>
                <div class="inputBox">
                    <input type="submit" value="Agregar">
                </div>
            </form>
        </div>

    </div>

</body>

</html>

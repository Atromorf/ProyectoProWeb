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
            <h2>Registro de Comics</h2>
            <form method="POST" action="{{ route('comics.store')}}" enctype="multipart/form-data">
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
                    <input type="number" required="required" name="txtEdicion" value="{{ old('txtEdicion') }}">
                    <span>Edicion</span>
                    <i></i>
                </div>
                <div class="errores">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtEdicion') }} </p>
                </div>
                <div class="inputBox">
                    <input type="text" required="required" name="txtCompañia" value="{{ old('txtCompañia') }}">
                    <span>Compañia</span>
                    <i></i>
                </div>
                <div class="errores">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtCompañia') }} </p>
                </div>
                <div class="inputBox">
                    <input type="number" required="required" name="txtCantidad" value="{{ old('txtCantidad') }}">
                    <span>Cantidad</span>
                    <i></i>
                </div>
                <div class="errores">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtCantidad') }} </p>
                </div>
                <div class="inputBox">
                    <input required class="form-control" type="number" name="txtPrecioC" value="{{ old('txtPrecioC') }}">
                    <span>Precio de Compra</span>
                    <i></i>
                </div>
                <div class="errores">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtPrecioC') }} </p>
                </div>
                <div class="links">
                    <a href="/AdminU">Regresar</a>
                </div>
                <div class="inputBox">
                    <input type="submit" value="Agregar">
                </div>
            </form>
        </div>

    </div>

</body>

</html>

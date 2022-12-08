<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registro Articulo</title>
    <link href="{{ asset('css/nusu.css') }}" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

@if (session()->has('registroA'))
    
    {!! "<script> Swal.fire(
        'Guardado correctamente!',
        'Articulo Registrado Correctamente!',
        'success'
        ) </script>" !!}

@endif

    <div class="box">
        <div class="form">
            <h2>Registro de Articulo</h2>
            <form method="POST" action="{{ route('articulo.store')}}">
                @csrf
                <div class="inputBox">
                    <input required class="form-control" type="text" name="txtTipo" value="{{ old('txtTipo') }}">
                    <span>Tipo</span>
                    <i></i>
                </div>
                <div class="errores">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtTipo') }} </p>
                </div>
                <div class="inputBox">
                    <input type="text" required="required" name="txtMarca" value="{{ old('txtMarca') }}">
                    <span>Marca</span>
                    <i></i>
                </div>
                <div class="errores">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtMarca') }} </p>
                </div>
                <div class="inputBox">
                    <input type="text" required="required" name="txtDescripcion" value="{{ old('txtDescripcion') }}">
                    <span>Descripcion</span>
                    <i></i>
                </div>
                <div class="errores">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtDescripcion') }} </p>
                </div>
                <div class="inputBox">
                    <input type="number" required="required" name="txtCantidadA" value="{{ old('txtCantidadA') }}">
                    <span>Cantidad</span>
                    <i></i>
                </div>
                <div class="errores">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtCantidadA') }} </p>
                </div>
                <div class="inputBox">
                    <input required class="form-control" type="number" name="txtPrecioCA" value="{{ old('txtPrecioCA') }}">
                    <span>Precio de Compra</span>
                    <i></i>
                </div>
                <div class="errores">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtPrecioCA') }} </p>
                </div>
                <div class="content-select">
                    <select name="txtProvee" id="txtProvee" required>
                        <option value="0">Seleccione un Proveedor</option>
                        @foreach ($proveedores as $proveedor)
                            <option>{{ $proveedor->empresa }}</option>
                        @endforeach
                </div>
                <div class="inputBox">
                    <input type="submit" value="Agregar">
                </div>
                <div class="links">
                    <a href="/AdminU">Regresar</a>
                </div>
            </form>
        </div>

    </div>

</body>

</html>

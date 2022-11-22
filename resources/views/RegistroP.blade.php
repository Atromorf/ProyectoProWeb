<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registro Comics</title>
    <link href="{{ asset('css/nusu.css') }}" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

@if (session()->has('registroP'))
    
    {!! "<script> Swal.fire(
        'Guardado correctamente!',
        'Proveedor Registrado Correctamente!',
        'success'
        ) </script>" !!}

@endif

    <div class="box">
        <div class="form">
            <h2>Registro de Comics</h2>
            <form method="POST" action="guardarProveedor">
                @csrf
                <div class="inputBox">
                    <input required class="form-control" type="text" name="txtEmpresa" value="{{ old('txtEmpresa') }}">
                    <span>Empresa</span>
                    <i></i>
                </div>
                <div class="errores">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtEmpresa') }} </p>
                </div>
                <div class="inputBox">
                    <input type="text" required="required" name="txtDireccion" value="{{ old('txtDireccion') }}">
                    <span>Direccion</span>
                    <i></i>
                </div>
                <div class="errores">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtDireccion') }} </p>
                </div>
                <div class="inputBox">
                    <input type="text" required="required" name="txtPais" value="{{ old('txtPais') }}">
                    <span>Pais</span>
                    <i></i>
                </div>
                <div class="errores">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtPais') }} </p>
                </div>
                <div class="inputBox">
                    <input type="number" required="required" name="txtContacto" value="{{ old('txtContacto') }}">
                    <span>Contacto</span>
                    <i></i>
                </div>
                <div class="errores">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtContacto') }} </p>
                </div>
                <div class="inputBox">
                    <input required class="form-control" type="number" name="txtFijo" value="{{ old('txtFijo') }}">
                    <span>Numero Fijo</span>
                    <i></i>
                </div>
                <div class="errores">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtFijo') }} </p>
                </div>
                <div class="inputBox">
                    <input required class="form-control" type="number" name="txtCelular" value="{{ old('txtCelular') }}">
                    <span>Numero de Celular</span>
                    <i></i>
                </div>
                <div class="errores">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtCelular') }} </p>
                </div>
                <div class="inputBox">
                    <input required class="form-control" type="email" name="txtCorreo" value="{{ old('txtCorreo') }}">
                    <span>Correo Electronico</span>
                    <i></i>
                </div>
                <div class="errores">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtCorreo') }} </p>
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

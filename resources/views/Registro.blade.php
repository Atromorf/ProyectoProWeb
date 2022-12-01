<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link href="{{ asset('css/registro.css') }}" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

@if (session()->has('registro'))
    
    {!! "<script> Swal.fire(
        'Guardado correctamente!',
        'Ya tienes una cuenta!',
        'success'
        ) </script>" !!}

@endif

    <div class="box">
        <div class="form">
            <h2>Registro</h2>
            <form method="POST" action="">
                @csrf
                <div class="inputBox">
                    <input required class="form-control" type="text" name="txtNombre" value="{{ old('txtNombre') }}">
                    <span>Nombre completo</span>
                    <i></i>
                </div>
                <div class="errores">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtNombre') }} </p>
                </div>
                <div class="inputBox">
                    <input type="email" required="required" name="txtCorreo" value="{{ old('txtCorreo') }}">
                    <span>Correo Electronico</span>
                    <i></i>
                </div>
                <div class="errores">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtCorreo') }} </p>
                </div>
                <div class="inputBox">
                    <input required class="form-control" type="text" name="txtNomUsua" value="{{ old('txtNomUsua') }}">
                    <span>Nombre de Usuario</span>
                    <i></i>
                </div>
                <div class="errores">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtNomUsua') }} </p>
                </div>
                <div class="inputBox">
                    <input required class="form-control" type="text" name="txtContraseña" value="{{ old('txtContraseña') }}">
                    <span>Contraseña</span>
                    <i></i>
                </div>
                <div class="errores">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtContraseña') }} </p>
                </div>
                <div class="links">
                    <a href="login">Regresar</a>
                </div>
                <div class="inputBox">
                    <input type="submit" value="Registrarse">
                </div>
            </form>
        </div>

    </div>

</body>

</html>

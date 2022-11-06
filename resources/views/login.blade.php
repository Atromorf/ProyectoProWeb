<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

@if (session('confirmacion'))
    
    <script> Swal.fire(
        'Guardado correctamente!',
        'Bienvenido {{ session('confirmacion')['usuario'] }} ya puedes comprar!',
        'success'
        ) </script>

@endif

@if (session()->has('registro'))
    
    {!! "<script> Swal.fire(
        'Guardado correctamente!',
        'Ya tienes una cuenta!',
        'success'
        ) </script>" !!}

@endif

    <div class="box">
        <div class="form">
            <h2>Login</h2>
            <form method="POST" action="guardarComic">
                @csrf
                <div class="inputBox">
                    <input required class="form-control" type="text" name="txtUsuario"
                        value="{{ old('txtUsuario') }}">
                    <span>Usuario</span>
                    <i></i>
                </div>
                <div class="errores">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtUsuario') }} </p>
                </div>
                <div class="inputBox">
                    <input type="password" required="required" name="txtContraseña" value="{{ old('txtContraseña') }}">
                    <span>Contraseña</span>
                    <i></i>
                </div>
                <div class="errores">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtContraseña') }} </p>
                </div>
                <div class="links">
                    <a href="Registro">Registrarse</a>
                    <a href="welcome">Salir</a>
                </div>
                <div class="inputBox">
                    <input type="submit" value="Ingresar">
                </div>
            </form>
        </div>

    </div>

</body>

</html>

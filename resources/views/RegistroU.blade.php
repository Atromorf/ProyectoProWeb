<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link href="{{ asset('css/nusu.css') }}" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

@if (session()->has('registroU'))
    
    {!! "<script> Swal.fire(
        'Guardado correctamente!',
        'Usuario Registrado Correctamente!',
        'success'
        ) </script>" !!}

@endif

    <div class="box">
        <div class="form">
            <h2>Registro de empleado</h2>
            <form method="POST" action="guardarEmpleado">
                @csrf
                <div class="inputBox">
                    <input required class="form-control" type="text" name="txtEmpleado" value="{{ old('txtEmpleado') }}">
                    <span>Nombre del empleado</span>
                    <i></i>
                </div>
                <div class="errores">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtEmpleado') }} </p>
                </div>
                <div class="inputBox">
                    <input type="number" required="required" name="txtTelefono" value="{{ old('txtTelefono') }}">
                    <span>Telefono</span>
                    <i></i>
                </div>
                <div class="errores">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtTelefono') }} </p>
                </div>
                <div class="inputBox">
                    <input type="email" required="required" name="txtCorreo" value="{{ old('txtCorreo') }}">
                    <span>Correo</span>
                    <i></i>
                </div>
                <div class="errores">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtCorreo') }} </p>
                </div>
                <div class="inputBox">
                    <input required class="form-control" type="text" name="txtCargo" value="{{ old('txtCargo') }}">
                    <span>Rol del usuario</span>
                    <i></i>
                </div>
                <div class="errores">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtCargo') }} </p>
                </div>
                <div class="inputBox">
                    <input required class="form-control" type="date" name="txtFechaNa" value="{{ old('txtFechaNa') }}">
                    <span>Fecha de Nacimiento</span>
                    <i></i>
                </div>
                <div class="errores">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtFechaNa') }} </p>
                </div>
                <div class="inputBox">
                    <input required class="form-control" type="text" name="txtContra" value="{{ old('txtContra') }}">
                    <span>Contraseña</span>
                    <i></i>
                </div>
                <div class="errores">
                    <p class="text-danger  fst-italic"> {{ $errors->first('txtContra') }} </p>
                </div>
                <div class="links">
                    <a href="AdminU">Regresar</a>
                </div>
                <div class="inputBox">
                    <input type="submit" value="Registrarse">
                </div>
            </form>
        </div>

    </div>

</body>

</html>

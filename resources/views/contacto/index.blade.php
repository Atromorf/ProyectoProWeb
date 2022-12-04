@extends('loyout0')

@section('contenido')

<style>
    body{
    font-family: 'Poppins', sans-serif;
    background-image: url(/IMG/boom2.jpg);
    }
    h1{
        color: white;
    }
</style>

<div class="container col-md-6">
<h1 class="display-4 text-center mt-5 mb-5">Dejanos un mensaje</h1>
    <form action="{{ route('pedidos.store') }}" method="POST">
        @csrf
        <div class="container col-md-6">

            <div class="card text-center mb-5">
                <div class="card-header">
                    <strong>Nuevo Correo</strong>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <label>
                            Correo:
                            <br>
                            <input required type="email" name="txtCorreo" class="form-control">
                        </label>
                    </div>
                    <div class="mb-3">
                        <label>
                            Nombre:
                            <br>
                            <input required type="text" name="txtNombre" class="form-control">
                        </label>
                    </div>
                    <div class="mb-3">
                        <label>
                            Mensaje:
                            <br>
                            <textarea required name="txtMensaje" class="form-control"></textarea>
                        </label>
                    </div>
                        <button type="submit" class="btn btn-warning">Enviar mensaje</button>
                </div>
            </div>
        </div>
    </div>
    </form>
@endsection

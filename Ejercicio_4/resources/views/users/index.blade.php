<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="container">
        <div class="row my-4 justify-content-center">
            <div class="col-md-10 d-flex justify-content-between mb-3">
                <h3>Usuarios</h3> <a href="{{ route('usuario.create') }}" class="btn btn-success">Crear usuario</a>
            </div>
            @if (session('status'))
                <div class="col-md-10">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <h5>{{ session('status') }}</h5>
                    </div>

                </div>
            @endif
            <div class="col-md-10">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Sexo</th>
                            <th scope="col">Rol</th>
                            <th scope="col" class="text-right">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->nombre }}</td>
                                <td>{{ $usuario->edad }}</td>
                                <td>{{ $usuario->sexo }}</td>
                                <td>{{ $usuario->rol->descripcion }}</td>
                                <td style="width: 20%" class="text-right">
                                    <a href="{{ route('usuario.edit', ['user' => $usuario->id]) }}"
                                        class="btn btn-primary btn-sm mr-2">Editar</a>
                                    <a data-id="{{ $usuario->id }}"
                                        class="btn btn-danger btn-sm btnEliminar">Eliminar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        $(document).on('click', '.btnEliminar', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            Swal.fire({
                title: '¿Desea dar de baja este usuario?',
                text: '',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, dar de baja',
                cancelButtonText: 'No'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "PUT",
                        url: "usuarios/eliminar/" + id,
                        data: "_token={{ csrf_token() }}",
                        dataType: "json",
                        success: function(response) {
                            if (response.success) {
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 2300,
                                    timerProgressBar: true,
                                })
                                Toast.fire({
                                    icon: 'success',
                                    title: response.success
                                }).then(() => {
                                    window.location.reload(true);
                                })

                            }
                        }
                    });
                }
            })
        });
    });
</script>

</html>

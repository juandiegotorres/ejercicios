<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear usuario</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-4">
                    <div class="card-header">
                        Crear Usuario
                    </div>
                    <div class="card-body">
                        <form action="{{ route('usuario.update', ['user' => $user->id]) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nombre">Nombre (*)</label>
                                        <input type="text" name="nombre" class="form-control"
                                            placeholder="Ej Joaquin..." value="{{ old('nombre', $user->nombre) }}">
                                        @error('nombre')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="edad">Edad</label>
                                        <input type="number" name="edad" class="form-control" placeholder="Ej 28..."
                                            value="{{ old('edad', $user->edad) }}">
                                        @error('edad')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="sexo">Sexo (*)</label>
                                        <div class="btn-group btn-group-toggle mt-1 d-block" data-toggle="buttons">
                                            <label class="btn btn-outline-secondary">
                                                <input type="radio" name="sexo" value="M"
                                                    {{ $user->sexo === 'M' ? 'checked' : '' }}> Hombre
                                            </label>
                                            <label class="btn btn-outline-secondary">
                                                <input type="radio" name="sexo" value="H"
                                                    {{ $user->sexo === 'H' ? 'checked' : '' }}> Mujer
                                            </label>
                                        </div>
                                        @error('sexo')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="rol_id">Rol (*)</label>
                                        <select name="rol_id" class="form-control">
                                            <option value="">-- Seleccione un rol --</option>
                                            @foreach ($roles as $rol)
                                                <option value="{{ $rol->id }}"
                                                    {{ $rol->id == $user->rol_id ? 'selected' : '' }}>
                                                    {{ $rol->descripcion }}</option>
                                            @endforeach
                                        </select>
                                        @error('rol_id')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12 text-right mt-3">
                                    <a href="{{ route('usuario.index') }}" class="btn btn-danger">Volver</a>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

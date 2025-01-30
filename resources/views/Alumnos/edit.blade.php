<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar alumnos</title>
</head>
<body>
    <header>
        <a href="{{ url('/alumnos')}}"><h1>Gestión Alumnos</h1></a>
    </header>
    <div class="form">
    <form action="{{ route('alumnos.update', $alumno->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <h2>Nuevo Alumno</h2>
            </div>
            <div>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" value="{{$alumno->nombre}}">
            </div>
            <div>
                <label for="">Matricula</label>
                <input type="text" name="matricula" id="matricula" value="{{$alumno->matricula}}">
            </div>
            <div>
                <label for="">Semestre</label>
                <input type="text" name="semestre" id="semestre" value="{{$alumno->semestre}}">
            </div>
            <div>
                <label for="">Email</label>
                <input type="email" name="email" id="email" value="{{$alumno->email}}">
            </div>
            <div>
                <label for="">Teléfono</label>
                <input type="text" name="telefono" id="telefono"  value="{{$alumno->telefono}}">
            </div>
            <button type="submit">Actualizar</button>
        </form>
    </div>
</body>
</html>
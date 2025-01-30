<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Dar alta alumno</h1>
    </header>
    <div class="form">
        <a href="{{ url('/alumnos')}}"><button>Ver lista</button></a>
        @livewireStyles
        @livewire('create-alumno')
        @livewireScripts
        <!--<form method="POST" action="{{route('alumnos.store')}}">
            @csrf
            <div>
                <h2>Nuevo Alumno</h2>
            </div>
            <div>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre">
            </div>
            <div>
                <label for="">Matricula</label>
                <input type="text" name="matricula" id="matricula">
            </div>
            <div>
                <label for="">Semestre</label>
                <input type="text" name="semestre" id="semestre">
            </div>
            <div>
                <label for="">Email</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="">Teléfono</label>
                <input type="text" name="telefono" id="telefono">
            </div>
            <button type="submit">Dar Alta</button>
        </form>-->
    </div>
</body>
</html>
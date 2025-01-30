<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maestros</title>
</head>
<body>
    <header>
        <h1>Maestros</h1>
    </header>
    
    <div class="TableroMaestros">
        <h2>Nuevo Maestro</h2>
        @livewireStyles
        @livewire('create-maestro')
        @livewireScripts
        <a href="{{ url('/maestros')}}">lista maestros</a>
        <!-- <form method="POST" action="{{ route('maestros.store')}}" >
            @csrf   
            <div>
                <label for="">Nombre</label>
                <input type="text" name="nombre" id="nombre">
            </div>
                
            <div>
                <label for="">Matricula</label>
                <input type="text" name="matricula" id="matricula">
            </div>
                
            <div>
                <label for="">Email</label>
                <input type="email" name="email" id="email">
            </div>
                
            <div>
                <label for="">Telefóno</label>
                <input type="text" name="telefono" id="telefono">
            </div>
            <div>
                <button type="submit">Enviar</button>
            </div>
        </form> -->
    </div>
</body>
</html>
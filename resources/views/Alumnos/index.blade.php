<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
</head>
<body>
    <header>
        <h1>Gestion Alumnos</h1>
    </header>
    <div>
        <h2>lista de alumnos</h2>

        @livewireStyles
        @livewire('lista-alumnos')
        @livewireScripts

        
        <!--<table class="border-1">
            <tr class="border-1">
                <td class="border = 2">N°</td>
                <td class="border = 2">Nombre</td>
                <td class="border = 2">Matricula</td>
                <td class="border = 2">Semestre</td>
                <td class="border = 2">Correo Electrónico</td>
                <td class="border = 2">Número Telefónico</td>
                <td class="border = 2">Opciones</td>
            </tr>
            @foreach ($alumnoslist as $key => $alumno)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$alumno->nombre}}</td>
                <td>{{$alumno->matricula}}</td>
                <td>{{$alumno->semestre}}</td>
                <td>{{$alumno->email}}</td>
                <td>{{$alumno->telefono}}</td>
                <td>
                    <li><a href="{{ route('alumnos.edit', $alumno->id)}}">Actualizar</a></li>
                    <form action="{{ route('alumnos.destroy', $alumno->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <li><button type="button" wire:click='eliminar({{ $alumno->id }})'>eliminar</button></li>
                    </form>
                </td>
            </tr>                
            @endforeach
        </table>-->
        <div>
            <a href="{{url('alumnos/create')}}"><button>Nuevo Alumno</button></a>
        </div>
    </div>
</body>
</html>
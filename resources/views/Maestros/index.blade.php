<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maestros</title>
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <div class="navbar bg-base-100">
                <ul>
                    <li>
                        <h2><a class="btn btn-ghost text-xl" href="{{ route('alumnos.index') }}">Alumnos</a></h2>
                    </li>
                    <li>
                        <h2><a class="btn btn-ghost text-xl" href="{{ route('maestros.index') }}">Maestros</a></h2>
                    </li>
                </ul>
              </div>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        @livewireStyles
                        @livewire('lista-maestros')
                        @livewireScripts
                        <div>
                            <a href="{{ route('maestros.create')}}"><button class="btn" type="button">nuevo maestro</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
    <!--<div>
        <a href="{{url('maestros/create')}}"><button>Nuevo Maestro</button></a>
        <table>
            <tr>
                <td>N°</td>
                <td>Nombre</td>
                <td>Matricula</td>
                <td>Correo Electrónico</td>
                <td>Teléfono</td>
            </tr>
            @foreach ($maestrosList as $key => $maestro)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$maestro->nombre}}</td>
                <td>{{$maestro->matricula}}</td>
                <td>{{$maestro->email}}</td>
                <td>{{$maestro->telefono}}</td>
                <td>
                    <a href="{{ route('maestros.edit', $maestro->id)}}">Actualizar</a>
                    <form action="{{ route('maestros.destroy', $maestro->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('dar baja a')" >Dar baja</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>-->
</body>
</html>
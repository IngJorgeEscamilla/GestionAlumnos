<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de alumnos</title>
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
                        <div class="form">
                            @livewireStyles
                            @livewire('create-alumno')
                            @livewireScripts
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>
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
    
</html>
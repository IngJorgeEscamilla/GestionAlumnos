<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha del maestro</title>
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
                    <li>
                        <h2><a class="btn btn-ghost text-xl" href="{{ route('materias.index') }}">Materias</a></h2>
                    </li>
                    <li>
                        <h2><a class="btn btn-ghost text-xl" href="{{ route('grupos.index') }}">Grupos</a></h2>
                    </li>
                </ul>
              </div>
        </x-slot>
        <div class="py-12">
            <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div>
                            @livewireStyles
                            @livewire('maestros.show-maestro', ['maestro' => 'maestro','id' => $maestro->id], key($maestro->id))
                            @livewireScripts
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>
</html>
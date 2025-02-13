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
                    <body>
                        <header>
                            
                        </header>
                        <div>
                            <h1 class=" text-2xl">Lista Alumnos</h1>
                            @livewireStyles
                            @livewire('lista-alumnos')
                            @livewireScripts
                            <div>
                                <a href="{{route('alumnos.create')}}"><button type="button" class="btn btn-primary my-3">Nuevo Alumno</button></a>
                            </div>
                        </div>
                    </body>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>

</html>
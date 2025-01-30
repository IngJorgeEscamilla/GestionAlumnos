<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    {{ $Lista }}

    <table class="border-1">
        <tr class="border-1">
            <td class="border = 2">N°</td>
            <td class="border = 2">Nombre</td>
            <td class="border = 2">Matricula</td>
            <td class="border = 2">Semestre</td>
            <td class="border = 2">Correo Electrónico</td>
            <td class="border = 2">Número Telefónico</td>
            <td class="border = 2">Opciones</td>
        </tr>
        @foreach ($alumnosList as $key => $alumno)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$alumno->nombre}}</td>
            <td>{{$alumno->matricula}}</td>
            <td>{{$alumno->semestre}}</td>
            <td>{{$alumno->email}}</td>
            <td>{{$alumno->telefono}}</td>
            <td>
                <li>@livewire('eliminar-datos', ['tipo' => 'alumno','id'=>$alumno->id], key($alumno->id))</li>
            </td>
        </tr>                
        @endforeach

    </table>
    <script>
        document.addEventListener('livewire:init', () => {
        Livewire.on('BajaAlumno', (event) => {
           if(event.eliminado)
           {
            //$wire.dispacth('recargarlista');
            #[On('echo:BajaAlumno'cargarLista)]
            public function cargarLista()
           }
           console.log(event);
            });
        });
    </script>
</div>

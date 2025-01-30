<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    <div class="overflow-x-auto">
        <table class="table">
          <!-- head -->
          <thead>
            <tr>
              <th></th>
              <th>Nombre</th>
              <th>Matricula</th>
              <th>Semestre</th>
              <th>Correo Electrónico</th>
              <th>Telefóno</th>
              <th>Opciones</th>
            </tr>
          </thead>
          <tbody>
            <!-- row 1 -->
            @foreach ($alumnosList as $key => $alumno)
            <tr class="bg-base-200">
              <th>{{$key+1}}</th>
              <td>{{$alumno->nombre}}</td>
              <td>{{$alumno->matricula}}</td>
              <td>{{$alumno->semestre}}</td>
              <td>{{$alumno->email}}</td>
              <td>{{$alumno->telefono}}</td>
              <td>
                <li></li>
                <li>@livewire('eliminar-datos', ['tipo' => 'alumno','id'=>$alumno->id], key($alumno->id))</li>
            </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function()
        {
            document.addEventListener('livewire:init', () => {
            Livewire.on('BajaAlumno', (event) => {
                if(event.eliminar)
                {
                    $wire.dispacth('cargarLista');
                }
                console.log(event);
            });
        });
        });
    </script>
</div>

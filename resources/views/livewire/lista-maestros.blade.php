<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="overflow-x-auto">
        <table class="table table-zebra">
          <!-- head -->
          <thead>
            <tr>
              <th></th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Matricula</th>
              <th>Correo Electrónico</th>
              <th>Teléfono</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($maestrosLista as $key => $maestro)
            <!-- row 1 -->
            <tr class="bg-base-200">
              <th>{{ $key+1 }}</th>
              <td>{{ $maestro ->nombre }}</td>
              <td>{{ $maestro->apellido }}</td>
              <td>{{ $maestro ->matricula }}</td>
              <td>{{ $maestro ->email }}</td>
              <td>{{ $maestro ->telefono }}</td>
              <td class="grid grid-cols-3">
                <button class="btn"><a href="{{ route('maestros.show',$maestro->id) }}">Ver</a></button>
                <button class="btn"><a href="{{ route('maestros.edit',$maestro->id) }}">Editar</a></button>
                @livewire('eliminar-maestro', ['tipo' => 'maestro','id'=>$maestro->id], key($maestro->id))
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
            Livewire.on('BajaMaestro', (event) => {
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

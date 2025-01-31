<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="overflow-x-auto">
        <table class="table table-zebra">
          <!-- head -->
          <thead>
            <tr>
              <th></th>
              <th>Nombre</th>
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
              <td>{{ $maestro ->matricula }}</td>
              <td>{{ $maestro ->email }}</td>
              <td>{{ $maestro ->telefono }}</td>
              <td>@livewire('eliminar-datos', ['tipo' => 'maestro','id'=>$maestro->id], key($maestro->id))</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
</div>

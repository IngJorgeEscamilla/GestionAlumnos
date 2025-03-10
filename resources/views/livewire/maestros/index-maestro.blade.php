<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="overflow-x-auto">
      <table class="table">
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
            <td>
              <a class="btn btn-info" href="{{ route('maestros.show',$maestro->id) }}">Ver</a>
              <a class="btn btn-neutral" href="{{ route('maestros.edit',$maestro->id) }}">Editar</a>
              <button class="btn btn-error" wire:click="deleteMaestro({{ $maestro->id }})">eliminar</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div>

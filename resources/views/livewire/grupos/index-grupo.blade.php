<div>
    {{-- Do your work, then step back. --}}
    <div class="overflow-x-auto">
        <table class="table table-zebra">
          <!-- head -->
          <thead>
            <tr>
              <th></th>
              <th>grupo</th>
              <th>Alumnos inscritos</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ( $Listgrupo as $key => $grupo  )
            <tr class="bg-base-200">
                <th>{{  $key+1 }}</th>
                <td>{{ $grupo->nomGrupo }}</td>
                <td>{{ $grupo->alumno }}</td>
                <td>
                  <a class="btn btn-info" href="{{ route('grupos.show',$grupo->id) }}">Ver</a>
                  <a class="btn btn-neutral">Editar</a>
                  <button class="btn btn-error" wire:click="deleteGrupo({{ $grupo->id }})">eliminar</button>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
</div>

<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="overflow-x-auto">
        <table class="table">
          <!-- head -->
          <thead>
            <tr>
              <th></th>
              <th>Asignatura</th>
              <th>clave</th>
              <th>horas</th>
              <th>Alumnos Inscritos</th>
              <th>Opciones</th>
            </tr>
          </thead>
          <tbody class="bg-base-200">
            @foreach ($materias as $key => $materia)
            <tr>
              <th>{{ $key+1 }}</th>
              <td>{{ $materia->nomMateria }}</td>
              <td>{{ $materia->clave }}</td>
              <td>{{ $materia->horas }}</td>
              <td>N/A</td>
              <td>
                <a class="btn btn-info" href="{{ route('materias.show',$materia->id) }}">Ver</a>
                <a class="btn btn-neutral" href="{{ route('materias.edit',$materia->id) }}">Editar</a>
                <button class="btn btn-error" wire:click="deleteMateria({{ $materia->id }})">Eliminar</button>
              </td>
            </tr>
            @endforeach   
          </tbody>
        </table>
    </div>
</div>

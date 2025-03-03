<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="overflow-x-auto">
        <table class="table table-zebra">
          <thead>
            <tr>
              <th></th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Matricula</th>
              <th>Semestre</th>
              <th>Correo Electrónico</th>
              <th>Telefóno</th>
              <th>Opciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($alumnosList as $key => $alumno)
            <tr class="bg-base-200">
              <th>{{$key+1}}</th>
              <td>{{$alumno->nombre}}</td>
              <td>{{$alumno->apellido}}</td>
              <td>{{$alumno->matricula}}</td>
              <td>{{$alumno->semestre}}</td>
              <td>{{$alumno->email}}</td>
              <td>{{$alumno->telefono}}</td>
              <td>
                <a class="btn btn-info" href="{{ route('alumnos.show',$alumno->id) }}">Ver</a>
                <a class="btn btn-neutral" href="{{ route('alumnos.edit',$alumno->id) }}">Editar</a>
                <button class="btn btn-error" wire:click="deleteAlumno({{ $alumno->id }})">Eliminar</button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
</div>

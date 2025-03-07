<div>
    <div class="card bg-black-200 w-96">
        <figure>
          <img
            src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
            alt="Shoes" />
        </figure>
        <div class="card-body w-100 bg-gray-500">
          <h2 class="card-title">Ficha del alumno</h2>
          <p>Nombre: {{ $alumno->nombre }} {{ $alumno->apellido }}</p>
          <p>Matricula: {{ $alumno->matricula }}</p>
          <p>Semestre: {{ $alumno->semestre }}</p>
          <p>Email: {{ $alumno->email }}</p>
          <p>Número Telefonico: {{ $alumno->telefono }}</p>
          @if ( $alumno->grupo != null )
          GRUPO: {{ $alumno->grupo->nomGrupo  }}
          @endif
          
          <div class="card-actions justify-end">
            <input class="file-input file-input-success file-input-xs" type="file" name="" id="">
          </div>
          <div>
         
            <button class="btn btn-primary">asignar grupo</button>
          </div>
        </div>
    </div>
</div>


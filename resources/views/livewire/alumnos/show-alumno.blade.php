<div>
    <div class="card bg-base-100 w-96 shadow-xl">
        <figure>
          <img
            src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
            alt="Shoes" />
        </figure>
        <div class="card-body">
          <h2 class="card-title">Ficha del alumno</h2>
          <p>Nombre: {{ $alumno->nombre }} {{ $alumno->apellido }}</p>
          <p>Matricula: {{ $alumno->matricula }}</p>
          <p>Semestre: {{ $alumno->semestre }}</p>
          <p>Email: {{ $alumno->email }}</p>
          <p>Número Telefonico: {{ $alumno->telefono }}</p>
          <div class="card-actions justify-end">
            <input type="file" name="" id="">
          </div>
          <div>
            <button class="btn btn-primary">asignar grupo</button>
            {{ $alumno->grupo }}
          </div>
        </div>
      </div></div>

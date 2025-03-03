<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="card bg-base-100 w-96 shadow-xl">
        <figure class="px-10 pt-10">
          <img
            src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
            alt="Shoes"
            class="rounded-xl" />
        </figure>
        <div class="card-body items-center text-center">
          <h2 class="card-title">{{ $materia->nomMateria }}</h2>
          <p>Asignatura: {{ $materia->nomMateria  }}</p>
          <p>Clave de la asignatura: {{ $materia->clave }}</p>
          <p>horas: {{ $materia->horas }}</p>

          <div class="card-actions">
            <button class="btn btn-primary">Registrar Alumnos</button>
            <button class="btn btn-secondary">Subir Calificaciones</button>
          </div>
        </div>
      </div>
</div>

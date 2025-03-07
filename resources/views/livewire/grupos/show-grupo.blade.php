<div>
   GRUPO: {{ $grupo->nomGrupo }}
   
   <div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-100">
    @if ($grupo->alumnos !=null) 
    <table class="table">
      <thead>
        <tr></tr>
        <th>nombre</th>
        <th>apellido</th>
        <th>correo electronico</th>
        <th>Semestre</th>
      </thead>
      <tbody class="bg-base-200">
        @foreach ($grupo->alumnos as $item)
        <tr>
          <td>{{ $item->nombre }}</td>
          <td>{{ $item->apellido }}</td>
          <td>{{ $item->email }}</td>
          <td>{{ $item->semestre }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>  
    @endif
  </div>
  <div class="max-w-4xl my-4">
    <button  class="btn btn-primary" onclick="my_modal_1.showModal()">añadir</button>
    <dialog id="my_modal_1" class="modal">
      <div class="modal-box">
        <h3 class="text-lg font-bold">Alumnos sin grupo</h3>
        <table class="table">
          <thead>
            <tr>
              <td></td>
              <td>nombre</td>
              <td>apellido</td>
              <td>semestre</td>
              <td>email</td>
              <td>añadir</td>
            </tr>
          </thead>
          <tbody>
            @foreach ($ListAlumno as $key => $item)
            <tr>
              <td>{{$key+1}}</td>
              <td>{{ $item->nombre }}</td>
              <td>{{ $item->apellido }}</td>
              <td>{{ $item->semestre }}</td>
              <td>{{ $item->email }}</td>
              <td><input type="checkbox" value="{{ $grupo->id }}" wire:model="model.grupo_id"></td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div>
          <form wire:submit="updateGrupoId">
            <button class="btn btn-primary">añadir</button>
          </form>
        </div>
        <div class="modal-action">
          <form method="dialog">
            <!-- if there is a button in form, it will close the modal -->
            <button class="btn">Close</button>
          </form>
        </div>
      </div>
    </dialog>
  </div>
</div>

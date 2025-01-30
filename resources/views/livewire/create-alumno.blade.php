<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <button type="button" wire:click='recargar'>nuevo</button>

    <label for="title">Nombre:</label>
    <input type="text" id="title" wire:model.blur="model.nombre"> 

    <label for="matricula">Matricula:</label>
    <input type="text" id="title" wire:model="model.matricula">
    
    <label for="title">Semestre</label>
    <input type="text" id="semestre" wire:model = "model.semestre"> 

    <label for="title">Correo Electrónico:</label>
    <input type="email" id="title" value="{{ $model['nombre'].$model['matricula'].$correo }}" disabled readonly> 

    <label for="title">Teléfono:</label>
    <input type="text" id="title" wire:model="model.telefono"> 

    <button type="button" wire:click='guardar'>Enviar</button>
</div>

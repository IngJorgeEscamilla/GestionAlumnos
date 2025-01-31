<div>
    <label for="title">Nombre:</label>
    <input type="text" placeholder="nombre del maestro" class="input w-full max-w-s" wire:model.blur="model.nombre"> 

    <label for="title">Matricula:</label>
    <input type="text" placeholder="matricula del maestro" class="input w-full max-w-s" wire:model="model.matricula"> 

    <label for="title">Correo Electrónico:</label>
    <input type="email" class="input w-full max-w-s" value="{{ $model['nombre'].$correo }}" disabled readonly> 

    <label for="title">Teléfono:</label>
    <input type="text" placeholder="Número teléfonico del maestro" class="input w-full max-w-s" wire:model="model.telefono"> 

    <button class="btn" type="button" wire:click='guardar'>Enviar</button>
</div>

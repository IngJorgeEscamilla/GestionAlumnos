<div>
    <button type="button" wire:click='recargar'>nuevo</button>

    <label for="title">Nombre:</label>
    <input type="text" id="title" wire:model.blur="model.nombre"> 

    <label for="title">Matricula:</label>
    <input type="text" id="title" wire:model="model.matricula"> 

    <label for="title">Correo Electrónico:</label>
    <input type="email" id="title" value="{{ $model['nombre'].$correo }}" disabled readonly> 

    <label for="title">Teléfono:</label>
    <input type="text" id="title" wire:model="model.telefono"> 

    <button type="button" wire:click='guardar'>Enviar</button>

</div>

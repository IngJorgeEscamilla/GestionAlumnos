<div>
    <!-- campo nombre para la tabla maestros-->
    <div>
        <label for="title">Nombre:</label>
        <input type="text" placeholder="nombre del maestro" class="input w-full max-w-s" wire:model.blur="model.nombre" > 
    {{ $errors->first('model.nombre'); }}        
    </div>
    
    <div>
        <label for="title">Apellido:</label>
        <input type="text" placeholder="apellido del maestro" class="input w-full max-w-s" wire:model.blur="model.apellido" >
        {{ $errors->first('model.apellido'); }}
    </div>

    <div>
        <!-- campo matricula para la tabla maestros-->
        <label for="title">Matricula:</label>
         <input type="text" placeholder="matricula del maestro" class="input w-full max-w-s" wire:model="model.matricula" > 
        {{ $errors->first('model.matricula'); }}
    </div>

    <div>
        <!-- campo email para la tabla maestros-->
        <label for="title">Correo Electrónico:</label>
        <input type="email" placeholder="email del maestro" class="input w-full max-w-s" wire:model.blur="model.email" > 
        {{ $errors->first('model.email'); }}
    </div>
    
    <div>
        <!-- campo telefóno para la tabla maestros-->
        <label for="title">Teléfono:</label>
        <input type="text" placeholder="Número teléfonico del maestro" class="input w-full max-w-s" wire:model="model.telefono" > 
        {{ $errors->first('model.telefono'); }}
    </div>
    
    <div>
        <button class="btn" type="button" wire:click='guardar'>Enviar</button>
    </div>
</div>

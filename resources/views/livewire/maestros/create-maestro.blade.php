<div>
    <!-- campo nombre para la tabla maestros-->
    <div>
        <label for="title">Nombre:</label>
        <input type="text" placeholder="nombre del maestro" class="input w-full max-w-s" wire:model="model.nombre" > 
        <div class="text-red-600">
            {{ $errors->first('model.nombre'); }}        
        </div>
    </div>
    
    <div>
        <label for="title">Apellido:</label>
        <input type="text" placeholder="apellido del maestro" class="input w-full max-w-s" wire:model="model.apellido" >
        <div class="text-red-600">
            {{ $errors->first('model.apellido'); }}
        </div>
    </div>

    <div>
        <!-- campo matricula para la tabla maestros-->
        <label for="title">Matricula:</label>
         <input type="text" placeholder="matricula del maestro" class="input w-full max-w-s" wire:model="model.matricula" > 
        <div class="text-red-600">
            {{ $errors->first('model.matricula'); }}
        </div>
    </div>

    <div>
        <!-- campo email para la tabla maestros-->
        <label for="title">Correo Electrónico:</label>
        <input type="email" placeholder="email del maestro" class="input w-full max-w-s" wire:model="model.email" > 
        <div class="text-red-600">
            {{ $errors->first('model.email'); }}
        </div>
    </div>
    
    <div>
        <!-- campo telefóno para la tabla maestros-->
        <label for="title">Teléfono:</label>
        <input type="text" placeholder="Número teléfonico del maestro" class="input w-full max-w-s" wire:model="model.telefono" > 
        <div  class="text-red-600">
            {{ $errors->first('model.telefono'); }}
        </div>
    </div>
    <div>
        <button class="btn btn-primary m-4" type="button" wire:click='guardar'>Enviar</button>
    </div>
</div>

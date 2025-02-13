<div>
    {{-- The Master doesn't talk, he acts. --}}
    <form wire:submit="maestroUpdate">
        <div>
            <label for="title">Nombre:</label> 
            <input type="text" placeholder="nombre del maestro" class="input w-full max-w-s"  wire:model="model.nombre" />
            {{ $errors->first('model.nombre'); }}
        </div>
        
        <div>
            <label for="title">Apellido:</label>
            <input type="text"  placeholder="apellido del maestro" class="input w-full max-w-s" wire:model="model.apellido"/>
            {{ $errors->first('model.apellido'); }}
        </div>
        
        <div>
            <label for="matricula">Matricula:</label>
            <input type="text"  placeholder="matricula del maestro" class="input w-full max-w-s" wire:model="model.matricula" />
            {{ $errors->first('model.matricula'); }}
        </div>
        
        <div>
            <label for="title">Correo Electrónico:</label>
            
            <input type="email" placeholder="correo electronico del maestro"  class="input w-full max-w-s" wire:model="model.email"/>
            {{ $errors->first('model.email'); }}
        </div>
        
        <div>
            <label for="title">Teléfono:</label>
            <input type="tel"  placeholder="Número teléfonico" class="input w-full max-w-s" wire:model="model.telefono"/>     
            {{ $errors->first('model.telefono'); }}
        </div> 
        
        <button class="btn" type="submit">Guardar</button>
    </form>
</div>

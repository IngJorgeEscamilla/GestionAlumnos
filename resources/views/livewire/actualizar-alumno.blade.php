<div>
    {{-- Success is as dangerous as failure. --}}
    <form wire:submit="dataUpdate">
        <div>
            <label for="title">Nombre:</label> 
            <input type="text" placeholder="nombre del alumno" class="input w-full max-w-s"  wire:model="model.nombre" />
            {{ $errors->first('model.nombre'); }}
        </div>
        
        <div>
            <label for="title">Apellido:</label>
            <input type="text"  placeholder="apellido del alumno" class="input w-full max-w-s" wire:model="model.apellido"/>
            {{ $errors->first('model.apellido'); }}
        </div>
        
        <div>
            <label for="matricula">Matricula:</label>
            <input type="text"  placeholder="matricula del alumno" class="input w-full max-w-s" wire:model="model.matricula" />
            {{ $errors->first('model.matricula'); }}
        </div>
    
        <div>
            <label for="title">Semestre</label>
            <input type="text"  placeholder="Semestre que cursa el alumno" class="input w-full max-w-s" wire:model="model.semestre"/>
            {{ $errors->first('model.semestre'); }}
        </div>
        
        <div>
            <label for="title">Correo Electrónico:</label>
            
            <input type="email" placeholder="correo electronico del alumno"  class="input w-full max-w-s" wire:model="model.email"/>
            {{ $errors->first('model.email'); }}
        </div>
        
        <div>
            <label for="title">Teléfono:</label>
            <input type="tel"  placeholder="Número teléfonico" class="input w-full max-w-s" wire:model="model.telefono"/>     
            {{ $errors->first('model.telefono'); }}
        </div> 
        
        <button type="submit">Guardar</button>

   
    </form>
    {{ var_dump($errors) }}
</div>

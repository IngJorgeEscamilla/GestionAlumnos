<div>
    {{-- Success is as dangerous as failure. --}}
    <form wire:submit="dataUpdate">
        <div>
            <label for="title">Nombre:</label> 
            <input type="text" placeholder="nombre del alumno" class="input w-full max-w-s"  wire:model="model.nombre" />
            <div class="text-red-600">
                {{ $errors->first('model.nombre'); }}
            </div>
        </div>
        
        <div>
            <label for="title">Apellido:</label>
            <input type="text"  placeholder="apellido del alumno" class="input w-full max-w-s" wire:model="model.apellido"/>
            <div class="text-red-600">
                {{ $errors->first('model.apellido'); }}
            </div>
        </div>
        
        <div>
            <label for="matricula">Matricula:</label>
            <input type="text"  placeholder="matricula del alumno" class="input w-full max-w-s" wire:model="model.matricula" />
            <div class="text-red-600">
                {{ $errors->first('model.matricula'); }}
            </div>
            
        </div>
    
        <div>
            <label for="title">Semestre</label>
            <input type="text"  placeholder="Semestre que cursa el alumno" class="input w-full max-w-s" wire:model="model.semestre"/>
            <div>
                {{ $errors->first('model.semestre'); }}
            </div class="text-red-600">
        </div>
        
        <div>
            <label for="title">Correo Electrónico:</label>
            <input type="email" placeholder="correo electronico del alumno"  class="input w-full max-w-s" wire:model="model.email"/>
            <div class="text-red-600">
                {{ $errors->first('model.email'); }}
            </div>
        </div>
        
        <div>
            <label for="title">Teléfono:</label>
            <input type="tel"  placeholder="Número teléfonico" class="input w-full max-w-s" wire:model="model.telefono"/>     
            <div class="text-red-600">
                {{ $errors->first('model.telefono'); }}
            </div>
        </div> 
        
        <button class="btn" type="submit">Guardar</button>

   
    </form>
</div>

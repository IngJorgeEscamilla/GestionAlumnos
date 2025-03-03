<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div>
        <label for="title">Nombre:</label>
        <input type="text" placeholder="nombre del alumno" class="input w-full max-w-s" wire:model="model.nombre" />
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
        <div class="text-red-600">
            {{ $errors->first('model.semestre'); }}
        </div>
    </div>
    
    <div>
        <label for="title">Correo Electrónico:</label>
        <input type="email" placeholder="correo electronico del alumno" class="input w-full max-w-s" wire:model.="model.email"/>
        <div class="text-red-600">
            {{ $errors->first('model.email'); }}
        </div>
    </div>
    
    <div>
        <label for="title">Teléfono:</label>
        <input type="tel"  placeholder="Número teléfonico" class="input w-full max-w-s" wire:model.="model.telefono"/>     
        <div class="text-red-600">
            {{ $errors->first('model.telefono'); }}
        </div>
    </div>
    
    <div>
        <button class="btn btn-primary m-4" type="button" wire:click='guardar'>Enviar</button>
    </div>   
</div>

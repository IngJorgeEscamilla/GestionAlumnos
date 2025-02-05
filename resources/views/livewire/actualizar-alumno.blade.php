<div>
    {{-- Success is as dangerous as failure. --}}
    <div>
        <label for="title">Nombre:</label>
        <!--<input  type="text" id="title" wire:model.blur="model.nombre"> -->
        <input type="text" placeholder="nombre del alumno" class="input w-full max-w-s" wire:model.blur="model.nombre" />
        {{ $errors->first('model.nombre'); }}
    </div>
    
    <div>
        <label for="title">Apellido:</label>
        <!--<input  type="text" id="title" wire:model.blur="model.nombre"> -->
        <input type="text"  placeholder="apellido del alumno" class="input w-full max-w-s" wire:model.blur="model.apellido"/>
        {{ $errors->first('model.apellido'); }}
    </div>
    
    <div>
        <label for="matricula">Matricula:</label>
        <!--<input  type="text" id="title" wire:model="model.matricula">-->
        <input type="text"  placeholder="matricula del alumno" class="input w-full max-w-s" wire:model.blur="model.matricula" />
        {{ $errors->first('model.matricula'); }}
    </div>

    <div>
        <label for="title">Semestre</label>
        <!--<<input  type="text" id="semestre" wire:model = "model.semestre"> -->
        <input type="text"  placeholder="Semestre que cursa el alumno" class="input w-full max-w-s" wire:model.blur="model.semestre"/>
        {{ $errors->first('model.semestre'); }}
    </div>
    
    <div>
        <label for="title">Correo Electrónico:</label>
        <!--<input   type="email" id="title" value="" disabled readonly> -->
        <input type="email" placeholder="correo electronico del alumno" class="input w-full max-w-s" wire:model.blur="model.email"/>
        {{ $errors->first('model.email'); }}
    </div>
    
    <div>
        <label for="title">Teléfono:</label>
        <!--<input  type="tel" id="title">-->
        <input type="tel"  placeholder="Número teléfonico" class="input w-full max-w-s" wire:model.blur="model.telefono"/>     
        {{ $errors->first('model.telefono'); }}
    </div>
    
    <div>
        <button class="btn" type="button" wire:click='guardar'>Enviar</button>
    </div>  
</div>

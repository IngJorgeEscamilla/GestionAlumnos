<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <!--<button type="button" wire:click='recargar'>nuevo</button>-->

    <label for="title">Nombre:</label>
    <!--<input  type="text" id="title" wire:model.blur="model.nombre"> -->
    <input type="text" placeholder="nombre del alumno" class="input w-full max-w-s" wire:model.blur="model.nombre"/>
    
    <label for="matricula">Matricula:</label>
    <!--<input  type="text" id="title" wire:model="model.matricula">-->
    <input type="text" placeholder="matricula del alumno" class="input w-full max-w-s" wire:model.blur="model.matricula"/>
    
    <label for="title">Semestre</label>
    <!--<<input  type="text" id="semestre" wire:model = "model.semestre"> -->
    <input type="text" placeholder="Semestre que cursa el alumno" class="input w-full max-w-s" wire:model.blur="model.semestre"/>

    <label for="title">Correo Electrónico:</label>
    <!--<input   type="email" id="title" value="{{ $model['nombre'].$correo }}" disabled readonly> -->
    <input type="email" class="input w-full max-w-s" wire:model.blur="model.email" value="{{ $model['nombre'].$correo }}" disabled readonly/>

    <label for="title">Teléfono:</label>
    <!--<input  type="tel" id="title" wire:model="model.telefono">-->
    <input type="tel" placeholder="Número teléfonico" class="input w-full max-w-s" wire:model.blur="model.telefono"/>     

    <button class="btn" type="button" wire:click='guardar'>Enviar</button>
</div>

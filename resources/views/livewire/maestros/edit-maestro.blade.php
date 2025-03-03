<div>
    <form wire:submit="maestroUpdate">
        <div>
            <label for="title">Nombre:</label> 
            <input type="text" class="input w-full max-w-s" wire:model="model.nombre" />
            <div class="text-red-600">
                {{ $errors->first('model.nombre'); }}
            </div>
        </div>
        <div>
            <label for="apellido">Apellido:</label>
            <input type="text" class="input w-full max-w-s" wire:model="model.apellido"/>
            <div class="text-red-600">
                {{ $errors->first('model.apellido'); }}
            </div>
        </div>
        <div>
            <label for="matricula">Matricula:</label>
            <input type="text" class="input w-full max-w-s" wire:model="model.matricula"/>
           <div class="text-red-600">

           </div>
            {{ $errors->first('model.matricula'); }}
        </div>
        <div>
            <label for="email">Correo Electrónico:</label>
            <input type="email" class="input w-full max-w-s" wire:model="model.email"/>
            <div class="text-red-600">
                {{ $errors->first('model.email'); }}
            </div>
        </div>
        <div>
            <label for="telefono">Teléfono:</label>
            <input type="tel" class="input w-full max-w-s" wire:model="model.telefono"/>     
            <div class="text-red-600">
                {{ $errors->first('model.telefono'); }}
            </div>
        </div> 
        <button class="btn" type="submit">Guardar</button>
    </form>
</div>


<div>
    <form wire:submit="materiaUpdate">
        <div>
            <label for="nomMateria">Asignatura</label>
            <input type="text" class="input w-full max-w-s my-2" wire:model="model.nomMateria">
            <div class="text-red-600">
                {{ $errors->first('model.nomMateria'); }}
            </div>
        </div>
        <div>
            <label for="clave">Clave</label>
            <input type="text" class="input w-full max-w-s my-2" wire:model="model.clave">
            <div class="text-red-600">
                {{ $errors->first('model.clave'); }}
            </div>
        </div>
        <div>
            <label for="horas">Horas</label>
            <input type="text" class="input w-full max-w-s my-2" wire:model="model.horas">
            <div class="text-red-600">
                {{ $errors->first('model.horas'); }}
            </div>
        </div>
        <div class="my-4">
            <button class="btn btn-primary" type="submit">Actualizar</button>
        </div>
    </form>
</div>

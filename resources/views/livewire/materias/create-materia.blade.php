<div>
    {{-- In work, do what you enjoy. --}}
    <form wire:submit="registerMateria">
        <div>
            <label for="">Asignatura</label>
            <input class="input w-full max-w-s" type="text" wire:model="model.nomMateria">
            <div class="text-red-600">
                {{ $errors->first('model.nomMateria'); }} 
            </div>
        </div>
        
        <div>
            <label for="">Clave</label>
            <input class="input w-full max-w-s" type="text" wire:model="model.clave">
            <div class="text-red-600">
                {{ $errors->first('model.clave'); }} 
            </div>
        </div>
     
        <div>
            <label for="">Horas</label>
            <input class="input w-full max-w-s" type="text" wire:model="model.horas">
            <div class="text-red-600"> 
                {{ $errors->first('model.horas'); }}
            </div> 
        </div>
     
        <button class="btn btn-primary w-full max-w-s my-10" type="submit">registrar materia</button>
    </form>
</div>

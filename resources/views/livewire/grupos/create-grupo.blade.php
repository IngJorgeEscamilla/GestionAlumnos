<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <form wire:submit="createGruop">
        <div class="my-4">
            <label for="nomGrupo">Grupo</label>
            <input class="input w-full max-w-s" type="text" wire:model="model.nomGrupo">
        </div>
        <div>
            <button type="submit" class="btn btn-primary m-4"> crear grupo</button>
        </div>
    </form>
</div>

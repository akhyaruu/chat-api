<div class="input-group rounded mb-3">
    <input wire:model.defer="query" class="form-control rounded" placeholder="Cari..." autocomplete="off"
        aria-label="search" aria-describedby="search-addon" required />
    <span wire:click="search" class="input-group-text border-0" id="search-addon" style="cursor: pointer;">
        <i class="fas fa-search"></i>
    </span>
    <button wire:click="startChat" class="btn btn-primary">
        <i class="fa-solid fa-comment-medical"></i>
    </button>
    <a href="#" class="btn btn-danger"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="fa-solid fa-right-from-bracket"></i>
    </a>
</div>

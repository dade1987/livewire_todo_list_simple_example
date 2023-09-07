<div>
    <button class="btn btn-success" type="button" onclick="Livewire.dispatch('modalShow')" data-bs-toggle="modal"
        data-bs-target="#exampleModal">Add Task</button>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label>Task Name</label>
                    <input type="text" wire:model="form_data.name" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click="store()" data-bs-dismiss="modal">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>

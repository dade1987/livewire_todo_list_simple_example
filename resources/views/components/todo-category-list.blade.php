<div class="row">
    <div class="col-md-2">
        @livewire('modal-add-task') 
    </div>
</div>


<div class="row mt-3">
    @foreach ($category_ids as $category_id)
        @livewire('todo', ['category_id' => $category_id])
    @endforeach
</div>


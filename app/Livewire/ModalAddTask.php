<?php

namespace App\Livewire;

use App\Models\Item;
use Livewire\Component;
use App\Models\Category;

class ModalAddTask extends Component
{

    public array $form_data = [];

    public function store()
    {
        $this->form_data['category_id'] = 1;

        Item::create($this->form_data);

        $this->form_data = [];

        $this->dispatch('refreshTodo');
    }

    public function render()
    {
        return view('livewire.modal-add-task');
    }
}

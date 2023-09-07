<?php

namespace App\Livewire;

use App\Models\Item;
use Livewire\Component;
use App\Models\Category;

class Todo extends Component
{

    public string $category_id;
    public string $title;

    public array $items;

    protected $listeners = ['refreshTodo' => 'index'];

    public function mount()
    {
        $this->title = Category::find($this->category_id)->name;
        $this->index();
    }

    public function index()
    {
        $this->items  = Category::find($this->category_id)->items->toArray();
    }

    public function moveItem($item_id)
    {
        //associate solo su belongsto e hasone

        Item::find($item_id)->category()->associate($this->category_id)->save();

        $this->index();
    }

    public function render()
    {
        return view('livewire.todo');
    }
}

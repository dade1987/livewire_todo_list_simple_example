<?php

namespace App\View\Components;

use Closure;
use App\Models\Category;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class TodoCategoryList extends Component
{
    public array $category_ids;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->category_ids = Category::get()->pluck('id', 'id')->toArray();

        //dd($this->category_ids);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.todo-category-list', ['category_ids' => $this->category_ids]);
    }
}

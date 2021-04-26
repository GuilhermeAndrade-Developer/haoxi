<?php

namespace App\Http\Livewire\Site;

use Livewire\Component;
use App\Models\Category;
class Categories extends Component
{   
    public $categories = [];
    public function mount() {
        $this->categories = Category::all()->where('status', 'ativo');
    }
    public function render()
    {
        return view('livewire.site.categories')->extends('layouts.app');
    }
}

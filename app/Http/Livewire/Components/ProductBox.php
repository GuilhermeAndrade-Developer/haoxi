<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class ProductBox extends Component
{

    public $name_products_services;
    public $image;
    public $itemId;
    public function render()
    {
        return view('livewire.components.product-box');
    }

    public function route($categoryId) {
        return redirect()->route('site.products', ['category' => $categoryId]);
    }
}

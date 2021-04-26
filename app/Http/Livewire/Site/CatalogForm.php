<?php

namespace App\Http\Livewire\Site;

use Livewire\Component;

class CatalogForm extends Component
{
    public function render()
    {
        return view('livewire.site.catalog-form')->extends('layouts.app');
    }
}

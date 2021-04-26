<?php

namespace App\Http\Livewire\Site;

use Livewire\Component;

class CatalogLogin extends Component
{
    public function render()
    {
        return view('livewire.site.catalog-login')->extends('layouts.app');
    }
}

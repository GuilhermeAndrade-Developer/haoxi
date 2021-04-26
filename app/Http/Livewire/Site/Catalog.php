<?php

namespace App\Http\Livewire\Site;

use Livewire\Component;

class Catalog extends Component
{
    public function render()
    {
        return view('livewire.site.catalog')->extends('layouts.app');
    }
}

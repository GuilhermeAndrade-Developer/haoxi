<?php

namespace App\Http\Livewire\Site;

use Livewire\Component;

class Catalogs extends Component
{
    public function render()
    {
        return view('livewire.site.catalogs')->extends('layouts.app');
    }
}

<?php

namespace App\Http\Livewire\Site;

use Livewire\Component;

class Product extends Component{
    public function render(){
        return view('livewire.site.product')->extends('layouts.app');
    }
}
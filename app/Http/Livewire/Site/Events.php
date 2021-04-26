<?php

namespace App\Http\Livewire\Site;

use Livewire\Component;

class Events extends Component{
    public function render(){
        return view('livewire.site.events')->extends('layouts.app');
    }
}

<?php

namespace App\Http\Livewire\Site;

use Livewire\Component;

class Event extends Component{
    public function render(){
        return view('livewire.site.event')->extends('layouts.app');
    }
}

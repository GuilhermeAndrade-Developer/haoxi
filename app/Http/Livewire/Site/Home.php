<?php

namespace App\Http\Livewire\Site;

use Livewire\Component;
use App\Models\Banner;

class Home extends Component{
    public $banners = [];
    public function mount() {
        $this->banners = Banner::all();
    }
    public function render(){
        return view('livewire.site.home')->extends('layouts.app');
    }
}

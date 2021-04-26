<?php

namespace App\Http\Livewire\Site;

use Livewire\Component;
use Request;
use App\Models\Category;
class Products extends Component{
    public $categoryId  = '';
    public $category    = array();
    public $categories  = array();
    public function mount() {
        $this->categoryId   = Request::get('category');
        if(empty($this->categoryId)) $this->categories = Category::all();
        else $this->category = Category::find($this->categoryId);
    }
    public function render(){
        return view('livewire.site.products')->extends('layouts.app');
    }
}

<?php

namespace App\Http\Livewire\Site;

use Livewire\Component;
use App\Models\Product;

class Budget extends Component{
    public $product     = '';
    public $productId   = '';
    public $total       = 0;

    public function mount($id)
    {
        $this->product = Product::find($id);
        $this->productId = $this->product->id;
    }
    public function render(){
        return view('livewire.site.budget')->extends('layouts.app');
    }

    public function add() {
        $this->total += 1;
    }

    public function subtract() {
        if($this->total > 0) {
            $this->total -= 1;
        }
    }

    public function session_put() {
        
        Session()->put('dataProduct', ['total' => $this->total, 'productId' => $this->productId]);
        if($this->total > 0) {
            return redirect('budget-form');
        }

    }
}

<?php

namespace App\Http\Livewire\Site;

use Livewire\Component;

use App\Services\BudgetService;

class BudgetForm extends Component
{   
    public $name            = '';
    public $email           = '';
    public $cpf_cnpj        = '';
    public $phone           = '';
    public $products        = [];
    public function render()
    {
        $this->products = session('dataProduct');
        return view('livewire.site.budget-form')->extends('layouts.app');
    }

    public function salvar() {
        $budgetService = new BudgetService();
        $productId = $this->products['productId'];
        $productTotal = $this->products['total'];
        $data = [
            'name'          => $this->name,
            'phone'         => $this->phone,
            'email'         => $this->email,
            'cpf_cnpj'      => $this->cpf_cnpj,
            'productId'     => $productId,
            'total'         => $productTotal,
        ];
        $budgetService->create($data);
    }
}

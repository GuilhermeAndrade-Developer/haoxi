<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Budget;

class BudgetController extends Controller{
    public function index(){
        $budgets    = Budget::paginate(env('PAGINATE'));
        $topBar     = 'listBudget';
        return view('admin.budgets.list', compact(['budgets', 'topBar']));
    }

    public function show($id) {
        $budget     = Budget::find($id);
        $topBar     = 'showBudget';
        $products   = $budget->products;
        return view('admin.budgets.budget', compact(['budget', 'products', 'topBar']));
    }

    public function change_status(Request $request) {
        $this->rules($request);
        Budget::where('id', $request->id)->update(['status' => $request->status]);
        return redirect()->route('admin.list.budgets')->with('success', 'Banner deletado com sucesso');
    }

    public function rules(Request $request) {
        $validated = $request->validate([
            'status'         => 'required',
        ]);
    }
}

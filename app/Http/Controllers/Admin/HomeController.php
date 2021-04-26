<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller{
    public function index(){
        $topBar   = 'dashboard';
        return view('admin.index', compact('topBar'));
    }
}

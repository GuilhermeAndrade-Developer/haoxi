<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorkUs;

class WorkUsController extends Controller
{
    
    public function index()
    {
        $works      = WorkUs::all();
        $topBar     = 'listWorkUs';
        return view('admin.workus', compact(['works', 'topBar']));
    }

}

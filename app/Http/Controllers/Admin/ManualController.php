<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ManualService;
use App\Models\Manuals;
use Response;

class ManualController extends Controller
{
    public function index() {
        $manuals =  Manuals::all();
        $topBar  = 'listManuals';
        return view('admin.manuals.list', compact(['manuals', 'topBar']));
    }

    public function create() {
        $topBar  = 'createManual';
        return view('admin.manuals.create', compact(['topBar']));
    }

    public function edit($id) {
        $manual  = Manuals::find($id);
        $topBar  = 'editManual';
        return view('admin.manuals.create', compact(['manual', 'topBar']));
    }

    public function save(Request $request) {
        $this->rules($request);
        $data = [];

        $manualService = new ManualService();

        if($request->has('document')) {
            $file = $request->document;
            $data['url'] = $file->getClientOriginalName();
            if(!$manualService->save_document($file)) return redirect()->back()->withErrors(['error', 'Não foi possivel salvar as informações']);
        }

        $data['title']          = $request->title;
        $data['description']    = $request->description;
        if($request->has('id')) {
            $data['id']    = $request->id;
            $message = 'Manual atualizado com sucesso';
            $manualService->save($data);
        } else {
            $manualService->save($data);
            $message = 'Manual criado com sucesso';
        }

        return redirect()->route('admin.manuals')->with('success', $message);
        
            
        
    }

    public function rules(Request $request) {
        $validated = $request->validate([
            'title'         => 'required|max:50',
            'description'   => 'required|max:180',
            // 'document'      => 'required|mimes:pdf',
        ]);
    }

    public function download($name) {
        $file = public_path() .'/'. Manuals::DEFAULT_DOCUMENT_DIR . $name;

        return Response::download($file, $name);
    }

    public function delete($id)
    {
        Manuals::find($id)->delete();
        return redirect()->route('admin.manuals')->with('success', 'Manual deletado com sucesso');
    }
}
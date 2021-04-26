<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\BannerService;
use App\Models\Banner;
use Exception;

class BannerController extends Controller
{
    public function index() {
        $banners    = Banner::all();
        $topBar     = 'listBanners';
        return view('admin.banners.list', compact(['banners', 'topBar']));
    }

    public function create($model) {
        $topBar     = 'createBanners';
        return view('admin.banners.create', compact(['model', 'topBar']));
    }

    public function list_templates() {
        $topBar     = 'listTemplatesBanners';
        return view('admin.banners.list-templates', compact(['topBar']));
    }

    public function edit($model, $id) {
        $banner     = Banner::find($id);
        $topBar     = 'EditBanners';
        return view('admin.banners.create', compact(['banner', 'topBar']));

    }

    public function save(Request $request) {
    try{
        $this->rules($request);
        $data = [];

        $bannerService = new BannerService();

        if($request->has('image')) {
            $file = $request->image;
            $data['image'] = $file->getClientOriginalName();
            if(!$bannerService->save_image($file)) return redirect()->back()->withErrors(['error', 'Não foi possivel salvar as informações']);
        }

        $data['title']          = $request->title;
        $data['sub_title']      = $request->sub_titile;
        $data['model']          = $request->model;
        $data['description']    = $request->description;
        $data['button']         = $request->button;
        $data['button_link']    = $request->button_link;

        if($request->has('id') && !empty($request->id)) {
            $message = 'Banner atualizado com sucesso';
        } else {
            $message = 'Banner criado com sucesso';
        }

        $data['id']    = $request->id;
        $bannerService->save($data);

        return redirect()->route('admin.banners')->with('success', $message);
    }catch(Exception $e) {
        $message =$e->getMessage();
        return redirect()->back()->withErrors([$message]);
    }
    }

    public function rules(Request $request) {
        $validated = $request->validate([
            'title'         => 'required|max:45',
            'sub_title'     => 'max:45',
            'button'        => 'max:30',
            'description'   => 'max:60',
            // 'image'      => 'required|mimes:pdf',
        ]);
    }

    public function delete($id)
    {
        Banner::find($id)->delete();
        return redirect()->route('admin.banners')->with('success', 'Banner deletado com sucesso');
    }
}

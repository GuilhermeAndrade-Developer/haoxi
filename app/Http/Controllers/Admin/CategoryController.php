<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CategoryService;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index(Request $request) {
        $search = $request->input('search') != null ? $request->input('search') : '';

        $categories = Category::where('name', 'like', '%'.$search.'%')
        ->paginate(env('PAGINATE'));
        $topBar     = 'listCategories';
        return view('admin.categories.list', compact(['categories', 'topBar']));
    }

    public function create() {
        $topBar     = 'createCategories';
        return view('admin.categories.create', compact(['topBar']));
    }

    public function edit($id) {
        $category       = Category::find($id);
        $subcategories  = Category::all()->where('parent_id', null);
        $edit           = true;
        $topBar         = 'editCategory';
        return view('admin.categories.create', compact(['category', 'edit', 'subcategories', 'topBar'])); 
    }

    public function save(Request $request) {
        $this->rules($request);
        $data = [];
        $categoryService = new CategoryService();

        if($request->has('file') && !empty($request->file) ) {
            $file = $request->file;
            $data['file'] = $file->getClientOriginalName();
            if(!$categoryService->save_image($file)) return redirect()->back()->withErrors(['error', 'Não foi possivel salvar as informações']);
        }else if(empty($request->file) && empty($request->id)){
            return redirect()->back()->withErrors(['error', 'É necessário carregar uma imagem!']);
        }

        $data['name']           = $request->name;
        $data['status']         = $request->status;

        if($request->has('id') && !empty($request->id)) {
            $message = 'Categoria atualizado com sucesso';
        } else {
            $message = 'Categoria criado com sucesso';
        }
        $data['id']    = $request->id;
        $category = $categoryService->save($data);

        
        if($request->has('sub_categories')) {
            $sub_categories = $request->sub_categories;
            foreach($category->children()->get() as $child) {
                $dataSubcategory = [];
                $position = array_search($child->id, $sub_categories);
                $dataSubcategory['parent_id']  = $position ? $category->id : null;
                $dataSubcategory['id']         = $child->id;
                $categoryService->saveSubcategory($dataSubcategory);
            }
    
            foreach ($sub_categories as $subcategory) {
                $dataSubcategory['parent_id']  = $category->id;
                $dataSubcategory['id']         = $subcategory;
                $categoryService->saveSubcategory($dataSubcategory);
            }
        }elseif($category->children()->count() > 0) {
            foreach($category->children()->get() as $child) {
                $dataSubcategory['parent_id']  = null;
                $dataSubcategory['id']         = $child->id;
                $categoryService->saveSubcategory($dataSubcategory);
            }
        }

        

        return redirect()->route('admin.edit.category', [$category->id])->with('success', $message);
    }

    public function editStatus(Request $request) {
        if(empty($request->categoryId)) {
            return redirect()->back()->withErrors(['error', 'É necessário selecionar uma categoria para alter o status!']);
        }
        $categoryService = new CategoryService();
        foreach ($request->categoryId as $category) {
            $data['id'] = $category;
            $data['status'] = $request->status;
            $categoryService->editStatus($data);
        }
        return redirect()->route('admin.list.categories')->with('success', 'Status alterado com sucesso!');
    }

    public function delete($id) {
        $category = Category::find($id);
        $produtos = $category->products()->count();
        $children = $category->children()->count();
        if($produtos == 0 && $children == 0) {
            $category->delete();
            return redirect()->route('admin.list.categories', [$category->id])->with('success', 'Categoria deletado com sucesso!');
        }
        return redirect(route('admin.edit.category'))->withErrors([
            'Error', 
            'Não foi possível excluir a categoria pois:',
            $children > 0 ? "Há {$children} sub-caterogia(s) relacionado a essa categoria" : null,
            $produtos > 0 ? "Há {$produtos} produto(s) relacionado a essa categoria" : null,
        ]);
    }

    public function rules(Request $request) {
        $validated = $request->validate([
            'name'         => 'required|max:20',
            'status'       => 'required',
            // 'file'         => 'required',
        ]);
    }
}

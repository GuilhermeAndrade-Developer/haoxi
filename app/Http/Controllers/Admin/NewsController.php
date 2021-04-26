<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Services\NewsService;
use Illuminate\Http\Request;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = News::all();
        return view('admin.news.list')->with('event', $event);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array (
            'title' => 'required|max:100',
            'text' => 'required'
        ));
        $data = [];

        $event = new NewsService();

        if($request->has('image')) {
            $file = $request->image;
            $data['image'] = $file->getClientOriginalName();
            if(!$event->save_image($file)) {
                return redirect()->back()->withErrors(['error', 'Não foi possivel salvar as informações']);
            }
        }

        $data['title'] = $request->title;
        $data['keywords'] = $request->keywords;
        $data['text'] = $request->text;
        $data['id'] = $request->id;
        
        $event->save($data);

        return redirect()->route('admin.events.show', $event->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = News::find($id);
        return view('admin.news.show')->with('event', $event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $event = News::find($id);
         return view('admin.news.edit')->with('event', $event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array (
            'title' => 'required|max:100',
            'text' => 'required'
        ));

        $event = News::find($id);
        $event->title = $request->input('title');
        $event->keywords = $request->input('keywords');
        $event->text = $request->input('text');

        $event->save();
        return redirect()->route('admin.show.events', $event->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = News::find($id);
        if ($event != null) {
            $event->delete();
            return redirect()->route('admin.events.index')->with('success', 'Post deletado com sucesso.');
        }

        return redirect()->route('admin.events.index')->with('error', 'Id errado');

    }
}

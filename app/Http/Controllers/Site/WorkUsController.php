<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Models\WorkUs;

class WorkUsController extends Controller
{
    public function create()
    {
        return view('liviwire.site.work-with-us');
    }

    public function store(Request $request)
    {
        
        try {
            
            $validator = Validator::make($request->all(), [
                'name' => ['required', 'string', 'min:4', 'max:255'],
                'email_adress' => ['required', 'string', 'email', 'min:7', 'max:255'],
                'phone' => ['required', 'string','min:13', 'max:14'],
                'message' => ['required', 'string','min:20', 'max:1000'],
                'file' => 'required|file|mimes:pdf,doc,docx,odt,txt|max:500'
            ]);

            //Verifica se os requisitos estão certos.
            if ($validator->fails()) {
                return redirect('liviwire.site.work-with-us')->withInput();
            }else{
                $file = uniqid(date('Y-m-d H').time(). '.'. $request->file->extension());
                $request->file->move(public_path('files'), $file);

                $file = "/files/".$file;

                $date = $request->all();
                $date['file'] = $file;

                WorkUs::create($date);
            }

        } catch (\Throwable $th) {
            return back()->with('error', 'Error sending contact.');
        }
    }
}

<?php
namespace App\Services;

use App\Models\Manuals;
use Response;

class ManualService {
    public function save($data) {
        Manuals::updateOrCreate(['id' => $data['id']], $data);
    }

    public function save_document($file)
    {
        $dir = Manuals::DEFAULT_DOCUMENT_DIR;

        $ex = $file->guessClientExtension();

        if($file->move($dir, $file->getClientOriginalName())) return true;

        return false;
    }

    public function download($name) {
        $file = public_path() .'/'. Manuals::DEFAULT_DOCUMENT_DIR . $name;

        return Response::download($file, $name);
    }
}
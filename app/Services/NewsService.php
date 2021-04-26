<?php

namespace App\Services;

use App\Models\News;

class NewsService {
    public function save($data) {
        News::updateOrCreate(['id' => $data['id']], $data);
    }

    public function save_image($file) {
        $dir = News::DEFAULT_IMG_NEWS_DIR;

        $ex = $file->guessClientExtension();

        if($file->move($dir, $file->getClientOriginalName())) return true;

        return false;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    const DEFAULT_IMG_NEWS_DIR = 'news/images/';

    public function images()
    {
        return $this->belongsToMany(NewsImages::class, 'news_images');
    }
    
    protected $fillable = [
        'title',
        'keywords',
        'text',
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];
}

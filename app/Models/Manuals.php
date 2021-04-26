<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manuals extends Model
{
    use HasFactory;

    const DEFAULT_DOCUMENT_DIR = 'document/manuals/';

    protected $fillable = [
        'title',
        'url',
        'description',
    ];
}

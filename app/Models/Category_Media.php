<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_Media extends Model
{
    use HasFactory;

    protected $table = 'category_media';
    protected $fillable = [
        'name',
        'media_id'
    ];
}

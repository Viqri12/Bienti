<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_comunity extends Model
{
    use HasFactory;

    protected $table = 'category_comunity';
    protected $fillable = [
        'name',
        'comunity_id'
    ];
}

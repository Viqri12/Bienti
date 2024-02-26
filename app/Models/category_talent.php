<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category_talent extends Model
{
    use HasFactory;

    
    protected $table = 'category_talent';
    protected $fillable = [
        'name',
        'talent_id'
    ];
}

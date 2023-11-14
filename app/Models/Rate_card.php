<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate_card extends Model
{
    use HasFactory;

    protected $table = 'rate_card';
    protected $fillable = [
        'name',
    ];
}

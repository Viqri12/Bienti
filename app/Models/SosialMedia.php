<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SosialMedia extends Model
{
    use HasFactory;

    protected $table = 'sosial_media';
    protected $fillable = [
        'name',
        'url_sosmed',
    ];

    public function RateCard()
    {
        return $this->hasMany(Rate_card::class, 'sosial_media_id' , 'id');
    }
}

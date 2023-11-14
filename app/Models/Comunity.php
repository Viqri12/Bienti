<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunity extends Model
{
    use HasFactory;

    
    protected $table = 'Comunity';
    protected $fillable = [
        'name',
        'username',
        'followers',
        'ig_link',
        'tier',
        'ig_photo_feed',
        'ig_Photo_feed_carousel',
        'ig_Story',
        'ig_Reels',
        'ig_Live',
        'attending_Event',
        'domisili',
        'notes'
    ];

    public function category() 
    {
        return $this->hasMany(Category_comunity::class,'comunity_id','id');
    }

}

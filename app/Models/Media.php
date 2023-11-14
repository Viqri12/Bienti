<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $table = 'media';
    protected $fillable = [
        'nama',
        'ig_link',
        'followers',
        'tier',
        'ig_photo_feed',
        'ig_Photo_feed_carousel',
        'ig_Story',
        'ig_story_with_link',
        'press_release',
        'contact_person',
        'notes'
    ];

    public function category1() 
    {
        return $this->hasMany(Category_Media::class,'media_id','id');
    }
}

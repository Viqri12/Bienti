<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialmediaHasInfluencer extends Model
{
    use HasFactory;

    protected $table = 'socialmedia_has_influencer';
    protected $fillable = [
        'followers',
        'username',
        'notes',
        'link',
        'sosial_media_id',
        'influencer_id'
    ];
  
    public function rateCard()
    {
        return $this->hasMany(RateCardHasInfluencer::class,'socialmedia_has_influencer_id','id')->with('ratecards');
    } 

    public function sosmed()
    {
        return $this->belongsTo(SosialMedia::class, 'sosial_media_id','id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class influencer extends Model
{
    use HasFactory;

    protected $table = 'influencer';
    protected $fillable = [
        'name',
        'phone',
        'domisili',
        'jenis_kelamin',
        'tier_id'
    ];

    public function category() 
    {
        return $this->hasMany(InfluencerHasCategory::class,'category_influencer_id','id');
    }

    public function sosialmedia()
    {
        return $this->hasMany(SocialmediaHasInfluencer::class,'influencer_id','id')->with('rateCard');
    }

    public function category_1()
    {
        return $this->hasMany(InfluencerHasCategory::class, 'influencer_id','id')->with('category_2');
    }
    
    public function tier()
    {
        return $this->belongsTo(Tier::class, 'tier_id','id');
    }

    public function rate_card()
    {
        return $this->hasMany(RateCardHasInfluencer::class,'id','influencer_id');
    }
}
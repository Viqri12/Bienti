<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RateCardHasInfluencer extends Model
{
    use HasFactory;

    protected $table = 'rate_card_has_influencer';
    protected $fillable = [
        'price',
        'rate_card_id',
        'influencer_id',
        'socialmedia_has_influencer_id',
    ];

    public function ratecards(){
        return $this->belongsTo(Rate_card::class,'rate_card_id');
    }
}

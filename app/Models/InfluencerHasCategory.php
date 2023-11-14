<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfluencerHasCategory extends Model
{
    use HasFactory;

    protected $table = 'influencer_has_category';
    protected $fillable = [
        'category_influencer_id',
        'influencer_id',
    ];

     public function category_2()
     {
        return $this->belongsTo(CategoryInfluencer::class, 'category_influencer_id','id');
     }
}

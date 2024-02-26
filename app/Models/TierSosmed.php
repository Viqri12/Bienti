<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TierSosmed extends Model
{
    use HasFactory;

    protected $table = 'tier_sosmed';
    protected $fillable = [
        'name',
        'socialmedia_has_influencer_id'
    ];

   
}

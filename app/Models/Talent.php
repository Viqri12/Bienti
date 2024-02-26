<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    use HasFactory;

    
    protected $table = 'talent';
    protected $fillable = [
        'name',
        'username',
        'followers',
        'instagram_link',
        'rate_card',
        'jenis_kelamin',
        'domisili',
        'contact_person',
        'notes'
    ];

    public function category3() 
    {
        return $this->hasMany(category_talent::class,'talent_id','id');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'email',
        'password',
        'description',
        'slogan',
        'median_price',
        'location',
        'longitude',
        'latitude',
        'rate_stars',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function plats(){
        return $this->hasMany(Plat::class);
    }

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

    public function rates(){
        return $this->belongsToMany(Rate::class);
    }
}

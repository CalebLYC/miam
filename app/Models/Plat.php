<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description',
        'price',
        'restaurant_id',
    ];

    public function restaurant(){
        return $this->belongsTo(Restaurant::class);
    }

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}

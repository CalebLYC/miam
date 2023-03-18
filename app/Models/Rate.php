<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;

    protected $fillable = [
        'stars_number',
        'user_id',
        'restaurant_id',
    ];

    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function restaurants(){
        return $this->belongsToMany(Restaurant::class);
    }
}

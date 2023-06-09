<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model implements Authenticatable
{
    use HasFactory;

    protected $table = 'restaurants';
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

    public function getUser(){
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

    use \Illuminate\Auth\Authenticatable;
    use \Illuminate\Auth\Passwords\CanResetPassword;
    use \Illuminate\Notifications\Notifiable;

    protected $guarded = [];

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }

    public static function check($email, $password){
        $resto = static::where('email', $email)->first();

        if($resto && password_verify($password, $resto->password)){
            return true;
        }

        return false;
    }

    public static function user(){
        return auth()->guard('resto')->user();
    }

    public function getAuthIdentifierName()
    {
        return 'email';
    }

    public function getAuthIdentifier()
    {
        return $this->email;
    }

    public function getAuthPassword()
    {
        return $this->password;
    }
}

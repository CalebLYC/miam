<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resto extends Model implements Authenticatable
{
    use HasFactory;

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

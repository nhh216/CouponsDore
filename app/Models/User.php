<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = 'users';

    public  static  function getPaswordKey($email)
    {
        return self::select('password')->where('email',$email)->get();
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    //
    protected $fillable = ['staff_id', 'staff_no', 'email', 'mobile', 'password', 'salt'];
    protected $table = "login";
}

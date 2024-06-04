<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableAdmin;

class Admin extends Model implements Authenticatable
{
    use HasFactory, AuthenticatableAdmin;

    protected $fillable = [
        'username',
        'password'
    ];

    public $timestamps = false;
}

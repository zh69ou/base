<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Auser extends Model
{

    protected $table = 'adusers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone', 'himg', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    public function uland()
    {
        return $this->hasMany('App\Model\Userland');
    }
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Auser extends Model
{

    protected $table = 'zl_ausers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];
}

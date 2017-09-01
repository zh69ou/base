<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Userland extends Model
{
	protected $table = 'z_userland';

	public function user()
    {
        return $this->belongsTo('App\Model\User','uid');
    }
}
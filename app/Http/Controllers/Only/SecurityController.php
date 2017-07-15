<?php

namespace App\Http\Controllers\Only;

use App\Http\Controllers\Controller;

class SecurityController extends Controller
{

    public function login()
    {
        return view('default.only.login');
    }

    public function land()
    {
        return '';
    }

    public function register()
    {
        return view('default.only.register');
    }

    public function join()
    {
        return '';
    }

    public function forgetpsw()
    {
        return view('default.only.forgetpsw');
    }

    public function piccode()
    {
        return view('default.only.piccode');
    }

    public function adlogin()
    {
        return view('default.only.login');
    }

    public function adland()
    {
        return '';
    }
}

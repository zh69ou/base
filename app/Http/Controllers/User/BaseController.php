<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public function index()
    {
        return view('user.index');
    }
    public function sitemanage()
    {
        return view('user.index');
    }
    public function payed()
    {
        return view('user.index');
    }
    public function gains()
    {
        return view('user.index');
    }
    public function message()
    {
        return view('user.index');
    }
}

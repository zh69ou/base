<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('user.index');
    }
    public function userinfo($id=0)
    {
        return view('user.index');
    }
    public function useradd()
    {
        return view('user.index');
    }
}

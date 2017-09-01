<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function sets()
    {
        return view('admin.index');
    }
    public function setmenu()
    {
        return view('admin.index');
    }
    public function setbanner()
    {
        return view('admin.index');
    }
    public function adusers()
    {
        return view('admin.index');
    }
    public function addadusers()
    {
        return view('admin.index');
    }
    public function infoadusers($id)
    {
        return view('admin.index');
    }
    public function poweradusers($id)
    {
        return view('admin.index');
    }
    public function logadusers($id=0)
    {
        return view('admin.index');
    }
}

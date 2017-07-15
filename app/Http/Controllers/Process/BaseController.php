<?php

namespace App\Http\Controllers\Tools;

use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public function index()
    {
        return view('tools.index');
    }
    public function list()
    {
        return view('tools.index');
    }
    public function info($id)
    {
        return view('tools.index');
    }
    public function shoping($id)
    {
        return view('tools.index');
    }
}

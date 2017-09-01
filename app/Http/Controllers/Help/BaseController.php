<?php

namespace App\Http\Controllers\Help;

use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public function index()
    {
        return view('help.index');
    }
    public function types()
    {
        return view('help.index');
    }
    public function list()
    {
        return view('tools.index');
    }
    public function info($id)
    {
        return view('tools.index');
    }
}

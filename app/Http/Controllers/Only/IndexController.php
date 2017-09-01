<?php

namespace App\Http\Controllers\Only;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('default.only.index');
    }
}

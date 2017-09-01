<?php

namespace App\Http\Controllers\Tools;

use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.index');
    }
}

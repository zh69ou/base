<?php

namespace App\Http\Controllers\Tools;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function toollist()
    {
        return view('tools.index');
    }
    public function toolinfo($id)
    {
    	var_dump($id);
        return view('tools.index');
    }
    public function utools($id)
    {
    	var_dump($id);
        return view('tools.index');
    }
}

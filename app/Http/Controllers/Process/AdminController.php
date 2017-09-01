<?php

namespace App\Http\Controllers\Tools;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function processlist()
    {
        return view('tools.index');
    }
    public function processinfo($id)
    {
    	var_dump($id);
        return view('tools.index');
    }
    public function portlist()
    {
        return view('tools.index');
    }
    public function portinfo($id)
    {
    	var_dump($id);
        return view('tools.index');
    }
    public function useportlist()
    {
        return view('tools.index');
    }
    public function useportinfo($id)
    {
    	var_dump($id);
        return view('tools.index');
    }
}

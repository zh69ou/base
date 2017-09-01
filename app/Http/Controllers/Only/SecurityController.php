<?php

namespace App\Http\Controllers\Only;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SecurityController extends Controller
{

    public function login()
    {
        return view('default.only.login');
    }

    public function land(Request $request)
    {
        $arr['status']=1;
        if (!Auth::check()) {
            $validator = Validator::make($request->all(), [
                'username' => 'required|max:18|min:6',
                'password' => 'required',
            ]);
            if ($validator->fails()&&Auth::attempt(['username' => $request->get('username'), 'password' => Hash::make($request->get('password'))])) {
                $arr['status']=0;
            }else{
                $arr['username']=$request->get('username');
                $arr['password']=Hash::make($request->get('password'));
            }
        }else{
            $arr['status']=0;
        }
        return response()->json($arr);
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

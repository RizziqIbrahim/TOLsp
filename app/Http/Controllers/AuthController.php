<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Hash;
use Auth;

class AuthController extends Controller
{
    public function Login(Request $request)
    {
        $rules = array(
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',
        );

        $cek = Validator::make($request->all(), $rules);
        if($cek->fails()){
            $errorString = implode(",",$cek->messages()->all());
            return redirect()->route('dashboard-admin')->with('warning', $errorString);
        }else{
            if(Auth::attempt($request->only('email', 'password'))){
                $user = User::where('email', $request->email)->first();
                $roles = $user->getRoleNames();
                if($roles[0] == 'admin'){
                    return redirect()->route('admin');
                }else{
                    return redirect()->route('article');
                }
            }else{
                return redirect()->back()->with('warning', "email/password salah");
            }
        }
    }

    public function loginT(Request $request)
    {
        return view('auth.login');
    }
}

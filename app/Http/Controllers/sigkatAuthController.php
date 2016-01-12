<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Model\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
class sigkatAuthController extends Controller
{
    public function getLogin(){
        if(!Auth::check()) {
            return view('forms.login');
        }
        return redirect()->back()
                         ->withErrors(['generalError' => 'Anda Sudah Login. Please Logout to login']);
    }

    public function postLogin(LoginRequest $request){


        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])
            || Auth::attempt(['email' => $request->username, 'password' => $request->password])){
            return redirect()->intended(route('home'));
        }
        return redirect()->back()
                         ->withErrors(['loginError' => 'Username/Password Salah']);
    }

    public function doLogout(){
        if(Auth::check()){
            if(Auth::logout()){
                return view('home');
            }
            return redirect()->back()->withErrors(['errors' => 'Terjadi Kesalahan Logout']);
        }
        return redirect()->back()
                         ->withErrors(['errors' => 'Anda belum Login, Ga Bisa Logout']);
    }

}

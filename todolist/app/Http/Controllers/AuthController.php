<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthLoginRequest;
use App\Http\Requests\AuthRegisterRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth/login');
    }
    public function register()
    {
        return view('auth/register');
    }


    public function Authregister(AuthRegisterRequest $request)
    {
        $adsoyad = $request->adsoyad;
        $email = $request->email;
        $password = Hash::make($request->password);

        User::create([

            "name" => $adsoyad,
            "email" => $email,
            "password" => $password

        ]);

        return redirect('/');

    }

    public function Authlogin(AuthLoginRequest $request) :  RedirectResponse
    {
        if (Auth::attempt($request->validated())) 
        {
            $request->session()->regenerate();
            return redirect()->intended('list');
        }

        return redirect()->back();
    }
}

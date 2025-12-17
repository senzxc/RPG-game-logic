<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginUser()
    {
        return view('login', [
            'title' => 'Login'
        ]);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect('/');
        }
        
        return back()->witherrors([
            'record' => 'Login failed.'
        ]);

    }

    public function regisUser()
    {
        return view('regis', [
            'title' => 'Register'
        ]);
    }

    public function storeUser(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:3'
        ]);

        $user = User::create([
            'email' => $data['email'],
            'password' => $data['password'],
        ]);

        Auth::login($user);
        $request->session()->regenerate();
        return redirect('/');
    }
}

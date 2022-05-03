<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function handleRegister()
    {
        $this->validate(request(), [
            'username' => 'required|max:16',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        $user = User::create(request(['username', 'email', 'password']));

        Auth::login($user);
        return redirect()->route('home');
    }

    function checkLogin(Request $request)
    {
        $attributes = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($attributes))
        {
            $user = User::where('email', $attributes['email'])->get();
            Auth::loginUsingId($user[0]->id);
            return redirect()->route('home');
        }
        else
        {
            return back()->with('error', 'Wrong Login Details');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}

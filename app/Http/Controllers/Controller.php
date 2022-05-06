<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function home()
    {
        $posts = Post::all()->take(10);
        return view('home', ['posts' => $posts]);
    }

    function login()
    {
        return view('login');
    }

    function register()
    {
        return view('register');
    }

    function postmaker()
    {
        return view('postmaker');
    }

    function search(Request $request)
    {
        $search = $request->input('search');
        $posts = Post::where('title', 'like', '%'.$search.'%')->get();
        return view('home', ['posts' => $posts]);
    }

    function dmc($dmc)
    {
        $posts = Post::where('tag', 'DMC ' . $dmc)->get();
        return view('home', ['posts' => $posts]);
    }
}

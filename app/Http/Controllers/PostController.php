<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function makePost()
    {
        $this->validate(request(), [
            'title' => 'required',
            'tag' => 'required',
            'description' => 'required',
            'author' => 'required',
        ]);

        Post::create(request(['title', 'tag', 'description', 'author']));
        return redirect()->home();
    }
}

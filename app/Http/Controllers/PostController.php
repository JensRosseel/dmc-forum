<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Reply;
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

    function makeReply()
    {
        $this->validate(request(), [
            'postid' => 'required',
            'author' => 'required',
            'description' => 'required',
        ]);

        Reply::create(request(['postid', 'author', 'description']));
        return redirect()->back();
    }
}

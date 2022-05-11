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

        $videoChopped = explode('=', request('video'));
        $videourl = "https://www.youtube.com/embed/" . $videoChopped[1];

        Post::create([
            'title' => request('title'),
            'tag'=> request('tag'),
            'description'=> request('description'),
            'author'=> request('author'),
            'video' => $videourl,
        ]);
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

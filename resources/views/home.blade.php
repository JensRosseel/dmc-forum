@extends('layouts.header')

@section('content')
<div class="home">
    <div class="info">
        <h1>Welcome to the DMC forum</h1>
        <p>You can make use of the forum to upload and look up combos, tips & tricks and glitches.</p>
    </div>

    <div class="posts">
        @foreach ($posts as $key => $post)
        <div class="post">
            <div class="title">{{ $post->title }}</div>
            <div class="tag">{{ $post->tag }}</div>
            <div class="author">author: {{ $post->author }}</div>
            <form action={{ route('post', $post->id) }} method="get">
                <input type="submit" name="submit" id="submit" value="View">
            </form>
        </div>
        @endforeach
    </div>
</div>
@endsection

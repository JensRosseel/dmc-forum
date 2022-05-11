@extends('layouts.header')

@section('content')
@foreach ($posts as $key => $post)
    <div class="post-extended">
        @if ($post->video != null)
        <iframe src={{ $post->video }}></iframe>
        @endif
        <div class="title">{{ $post->title }}</div>
        <div class="tag">{{ $post->tag }}</div>
        <div class="description">
            {{ $post->description }}
        </div>
        <div class="author">author: {{ $post->author }}</div>
    </div>
    <ul class="replies">
    @foreach ($replies as $key => $reply)
        <li class="reply">
            <div class="author">{{ $reply->author }}</div>
            <div class="description">{{ $reply->description }}</div>
        </li>
    @endforeach
    </ul>
    <div class="replyBox">
        <form action={{ route('makeReply') }} method="post">
            @csrf
            <input type="text" name="postid" id="postid" value={{ $post->id }}>
            <input type="text" name="author" id="author" value={{ Auth::user()->username }}>
            <textarea name="description" id="description" placeholder="Type a reply..."></textarea>
            <input type="submit" name="submit" id="submit" value="Reply">
        </form>
    </div>
@endforeach
@endsection

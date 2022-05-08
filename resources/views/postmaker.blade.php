@extends('layouts.header')

@section('content')
@if ($message = Session::get('error'))
    <strong>{{ $message }}</strong>
@endif

@if (count($errors) > 0)
    <ul class="errors">
    @foreach($errors->all() as $error)
        <li class="error">{{ $error }}</li>
    @endforeach
    </ul>
@endif
<form action={{ route('makePost') }} method="post" class="postmaker">
    @csrf
    <label for="title">Title: </label>
    <input type="text" name="title" id="title">
    <label for="tag">Tag: </label>
    <select name="tag" id="tag">
        <option value="DMC 1">DMC 1</option>
        <option value="DMC 2">DMC 2</option>
        <option value="DMC 3">DMC 3</option>
        <option value="DMC 4">DMC 4</option>
        <option value="DMC 5">DMC 5</option>
    </select>
    <label for="description">Description: </label>
    <textarea name="description" id="description"></textarea>
    <input type="text" name="author" id="author" value={{ Auth::user()->username }}>
    <input type="submit" name="submit" id="submit" value="Make Post">
</form>
@endsection

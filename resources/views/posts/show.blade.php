@extends('layouts.master')
@section('content')
	@foreach ($posts as $post)
        User: {{ $post->user->name }}
        <br>
		Job description: {{ $post->content }}
        <br>
        Posted: {{ $post->created_at}}
        <br>
        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-default" role="button">I'll do this!</a>
	@endforeach
@endsection
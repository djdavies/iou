@extends('layouts.master')
@section('content')
	@foreach ($posts as $post)
		{{ $post->content }}
	@endforeach 
@endsection
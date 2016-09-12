@extends('layouts.master')
@section('content')
	@foreach ($posts as $post)
        User: {{ $post->user->name }}
        <br>
		Job description: {{ $post->content }}
        <br>
        Posted: {{ $post->created_at}}
        <br>

         {{--Form to submit to jobs.store...--}}
        {!! Form::open([
            'route' => 'jobs.store',
        ]) !!}

        <div class="form-group">
            {{ Form::hidden('id', $post->id) }}
        </div>

        {!! Form::submit('Propose offer', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}

	@endforeach
@endsection
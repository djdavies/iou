@extends('layouts.master')
@section('content')
	@foreach ($posts as $post)
        <div class="well jobPropose">
            <h2>Here's the job you're proposing to do:</h2>
            <ul>
                <li>You'll be doing it for {{ $post->user->name }}</li>
                <li>{{ $post->user->name }} would like you to: {{ $post->content }}</li>
                <li>This job was posted on: {{ $post->created_at}}</li>
            </ul>

             {{--Form to submit to jobs.store...--}}
            {!! Form::open([
                'route' => 'jobs.store',
            ]) !!}

            <div class="form-group">
                {{ Form::hidden('id', $post->id) }}
            </div>

            {!! Form::submit('Propose offer', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}

        </div>
	@endforeach
@endsection
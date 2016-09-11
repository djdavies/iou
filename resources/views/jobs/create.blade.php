@extends('layouts.master')
@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{--<!-- TODO: tags -->--}}

    <h1>What would you like someone to do for you?</h1>
    {!! Form::open([
        'route' => 'posts.store',
    ]) !!}

    <div class="form-group">
        {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        {!! Form::label('image', 'Optional: choose image related to your job', ['class' => 'control-label']) !!}
        {!! Form::file('image') !!}
    </div>

    {!! Form::submit('Create New Post', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
@endsection

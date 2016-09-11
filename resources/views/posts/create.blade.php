@extends('layouts.master')
@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

{{--<!-- TODO: tags -->--}}

    <h1>What would you like someone to do for you?</h1>
{!! Form::open([
    'route' => 'posts.store'
]) !!}

<div class="form-group">
    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    {!! Form::label('image', 'Optional: choose image related to your job', ['class' => 'control-label']) !!}
    {!! Form::file('') !!}
</div>

{!! Form::submit('Create New Post', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}
@endsection

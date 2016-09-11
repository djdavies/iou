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

{!! Form::open([
    'route' => 'posts.store'
]) !!}

<div class="form-group">
    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Create New Post', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}
@endsection

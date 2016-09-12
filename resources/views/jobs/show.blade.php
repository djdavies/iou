@extends('layouts.master')
@section('content')
    @foreach ($jobs as $job)
        Job id: {{ $job->id }}
        <br>
        Post id: {{ $job->post_id }}
        <br>
        User id: {{ $job->user_id }}
        <br>
        Accepted?: {{ $job->accepted }}
        <br>
        Completed: {{ $job->completed }}
        <hr>
    @endforeach
@endsection
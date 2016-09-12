@extends('layouts.master')
@section('content')
    @foreach ($jobs as $job)
        <div class="well well-lg">
        Job id: {{ $job->id }}
        <br>
        Job post_id: {{ $job->post_id }}
        <br>
        User id: {{ $job->user_id }}
        <br>
        Accepted: {{ $job->accepted }}
        <br>
        Test: {{ $job->post->content }}
        </div>
    @endforeach
@endsection
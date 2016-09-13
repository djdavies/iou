@extends('layouts.master')
@section('content')
    <div class="well well-lg">
        <h2>Here are the proposals for your jobs.</h2>
    </div>
    @foreach ($jobs as $job)
        The job:
        Accepted?: {{ $job->accepted }}
        <br>
        Completed: {{ $job->completed }}
        <hr>
    @endforeach
@endsection
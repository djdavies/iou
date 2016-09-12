@extends('layouts.master')
@section('content')
    <div class="well well-lg">
        <h2>Here are all the jobs you've applied for.</h2>
    </div>
    @foreach ($jobs as $job)
        <div class="well well-lg">
            <table class="table">
                <thead>
                <tr>
                    <th>Job Owner</th>
                    <th>Job Description</th>
                    <th>Job Accepted By Owner?</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $job->post->user->name }}</td>
                    <td>{{ $job->post->content }}</td>
                    <td>{{ $job->accepted }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    @endforeach
@endsection




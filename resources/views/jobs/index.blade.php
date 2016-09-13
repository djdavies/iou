@extends('layouts.master')
@section('content')
    <div class="well well-lg">
        <h2>Here are all the jobs you've applied for.</h2>
    </div>
    @foreach ($jobs as $job)
        <div class="well well-md">
            <table class="table">
                <thead>
                <tr>
                    <th><span style="color:#3097D1">Job Owner</span></th>
                    <th><span style="color:#3097D1">Job Description</span></th>
                    <th><span style="color:#3097D1">Job Accepted By Owner?</span></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $job->post->user->name }}</td>
                    <td>{{ $job->post->content }}</td>
                    <td>@if ($job->accepted == 1) <span style="color:#3097D1">Yes</span> @else No @endif</td>
                </tr>
                </tbody>
            </table>
        </div>
    @endforeach
@endsection


@extends('layouts.master')
@section('content')
    <div class="well well-lg">
        <h2>Here are the proposals for your jobs</h2>
    </div>

    @foreach($jobs as $job)
        <div class="well well-md">
            <table class="table">
                <thead>
                    <tr>
                        <th>User's Name</th>
                        <th>Job Description</th>
                        <th>Accept Offer?</th>
                        <th>Job Completed?</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $job->name }}</td>
                    <td>{{ $job->content }}</td>
                    <td>
                        {{-- Accepting the offer--}}
                        @include('jobs.edit')
                    </td>
                    <td>
                        {{-- Marking job as completed--}}
                        @include('jobs.complete')
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    @endforeach
    </div>
@endsection
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
                        <th><span style="color:#3097D1">User's Name</span></th>
                        <th><span style="color:#3097D1">Job Description</span></th>
                        <th>
                            <span style="color:#3097D1">Accept Offer?</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $job->name }}</td>
                    <td>{{ $job->content }}</td>
                    <td>
                        {!! Form::open([
                            'route' => 'jobs.update', $job->id
                        ]) !!}
                        Yes {!!  Form::checkbox('yes_offer', '1') !!}
                        <br>
                        No {!!  Form::checkbox('no_offer', '0') !!}
                        <br>
                        {!! Form::submit('Respond To Offer', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    @endforeach
    </div>
@endsection
@extends('layouts.master')
@section('content')
    <h1>Propose job</h1>
    <p>You are proposing to complete the following job:</p>

    @foreach($posts as $post)
        <ul>
            <li><strong>Job proposer:</strong> {{ $post->user->name }}</li>
            <li><strong>Job description:</strong> {{$post->content}}</li>
        </ul>
    @endforeach
    <strong>By doing this job, you will receive 1 credit.</strong>

    @include('jobs.create')
@endsection
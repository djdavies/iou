@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-3">
            @if(Session::has('flash_message'))
                <div class="alert alert-success">
                    {{ Session::get('flash_message') }}
                </div>
            @endif
            <a href="{{ route('posts.create') }}" class="btn btn-default" role="button">Create Post</a>

            <h1>All posts</h1>
        <em>...hopefully a job to match your skills</em>
        </div>
    </div>
        <div class="row">
            @foreach ( $posts as $post )
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="{{ $post->user->imgUrl }}" alt="Picture of {{ $post->user->name }}">
                        <div class="caption">
                            <h3>{{ $post->user->name }} is looking for...</h3>
                            <p>{{ $post->content }}</p>
                            <em>Tags:
                                @foreach($post->tags as $tag)
                                    {{{ $tag->name }}},
                                @endforeach
                            </em>
                            <p>
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-default" role="button">View Job</a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @section('scripts')
    @endsection
@endsection
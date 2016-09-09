@extends('master')
@section('content')
    <div class="row">
        @foreach ( $posts as $post ) 
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{ $post->user->imgUrl }}" alt="Picture of {{ $post->user->name }}">
                    <div class="caption">
                    <h3>{{ $post->user->name }}</h3>
                        <p>{{ $post->content }}</p>
                        <em>Tags:
                        @foreach($post->tags as $tag)
                            {{{ $tag->name }}},
                        @endforeach
                        </em>
                        <p><a href="#" class="btn btn-primary" role="button">I'll do it!</a> <a href="#" class="btn btn-default" role="button">See further details</a></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

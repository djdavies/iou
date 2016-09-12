@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-3">
            @if(Session::has('flash_message'))
                <div class="alert alert-success">
                    {{ Session::get('flash_message') }}
                </div>
            @endif
        </div>
    </div>

            <div class="row">
                <div class="col-sm-6 col-md3">
                    <div class="jumbotron">
                        <h1>Have at look at what people want you to do...</h1>
                        <p><em>...hopefully, you'll then be able to propose to complete the job they've advertised</em></p>
                        <a href="{{ route('posts.create') }}" class="btn btn-default" role="button">Create Post</a>

                    </div>
                </div>
                <div class="col-sm-6 col-md3">
                    <div class="jumbotron">
                        <h1>Or, ask the community to do something for you...</h1>
                        <p><em>...hopefully, you'll then receive offers, which you can accept, based on user ratings</em></p>
                        <a href="#posts"><i class="fa fa-arrow-down fa-4x fa-fw" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        <div class="row" id="posts">
            @foreach ( $posts as $post )
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="{{ $post->user->imgUrl }}" alt="Picture of {{ $post->user->name }}">
                        <div class="caption">
                            <h3>{{ $post->user->name }} is looking for...</h3>
                            <p>{{ $post->content }}</p>
                            <em>Tags:
                                @foreach($post->tag as $tag)
                                    {{{ $tag->name }}},
                                @endforeach
                            </em>
                            <p>
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-default" role="button">I'll do it!</a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @section('scripts')
        <script>
            $(function() {
                $('a[href*="#"]:not([href="#"])').click(function() {
                    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                        if (target.length) {
                            $('html, body').animate({
                                scrollTop: target.offset().top
                            }, 1000);
                            return false;
                        }
                    }
                });
            });
        </script>
    @endsection
@endsection
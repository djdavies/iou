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
        <div class="page-header">
            <div class="jumbotron">
                <span style="color: #3097D1;">
                <h1>IOU?</h1>
                </span>
                <h2>"I owe you."</h2>
                <em>
                    <h3>Time is money.</h3>

                    <h4>Let's get to work...</h4>
                </em>
                <a href="#jumbos"><i class="fa fa-arrow-down fa-4x fa-fw" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>

    <div class="row" id="jumbos">
        <div class="col-sm-6 col-md3">
            <div class="jumbotron jumbotronPosts">
                <h1>Have at look at <strong style="color: #3097D1;">what people want you to do</strong>.</h1>
                <p><em>...hopefully, you'll then be able to <strong style="color: #3097D1;">propose to complete the job</strong> they've advertised.</em></p>

                @if(Auth::check())
                    <a href="{{ route('posts.create') }}" class="btn btn-default" role="button">Create Post</a>
                @endif

            </div>
        </div>
        <div class="col-sm-6 col-md3">
            <div class="jumbotron jumbotronPosts">
                <h1>Or, <strong style="color: #3097D1;">ask the community to do something for you</strong>.</h1>
                <p><em>...hopefully, you'll then <strong <strong style="color: #3097D1;">receive offers</strong>, which you can accept, based on user ratings.</em></p>
                <a href="#posts"><i class="fa fa-arrow-down fa-4x fa-fw" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>

    <div class="row" id="posts">
        @foreach ( $posts as $post )
            <div class="col-sm-6 col-md-3 posts">
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
                        @if (Auth::check())
                            <p>
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-default" role="button">I'll do it!</a>
                            </p>
                        @endif
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
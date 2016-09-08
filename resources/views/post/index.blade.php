@extends('master')

@section('content')
	<div class="row">
		<div class="col-md-10">
			@foreach ($posts as $posts)
			    <p>{{ $posts->content }}.</p>
			@endforeach
		</div>
	</div>
@endsection
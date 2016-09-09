@extends('master')
@section('content')
<div class="row">
	<div class="col-sm-6 col-md-4">
		@foreach ($users as $user)
			<ul>
				<li>{{ $user->name }}</li>
			</ul>
		@endforeach	
	</div>
</div>
@endsection
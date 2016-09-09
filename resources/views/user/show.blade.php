@extends('master')
@section('content')
	@foreach ($users as $user)
		{{ $user->name }}
	@endforeach 
@endsection
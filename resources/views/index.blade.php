@extends('layouts.master')
@section('content')
	<form method="post">
		<div class="form-group">
			<label for="email">Email address</label>
			<input type="email" class="form-control" id="email" placeholder="Enter email">
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control" id="password" placeholder="password">
		</div>
		<button type="submit" class="btn btn-default">Submit</button>
	</form>
@endsection
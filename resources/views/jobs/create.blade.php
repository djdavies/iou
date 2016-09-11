@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

{!! Form::open([
    'route' => 'jobs.store'
]) !!}

{!! Form::submit('Accept this job', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}


@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{!! Form::model($jobs, ['method' => 'PATCH','route' => ['jobs.update', $job->id]]) !!}


Yes {!!  Form::radio('complete', '1') !!}
<br>
{!! Form::submit('Mark As Completed', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}
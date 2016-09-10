<form>
    <div class="form-group">
        <label for="job_request">What task would you like done for you?</label>
        <input type="data" class="form-control" id="job_request" placeholder="e.g. mow my lawn">
    </div>
    <!-- TODO: tags -->

    <a href="{{ route('posts.store') }}" class="btn btn-default" role="button">Post</a>
</form>

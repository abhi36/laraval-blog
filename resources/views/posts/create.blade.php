@extends('layouts.master')


@section('content')

    <div class="col-sm-9">
        <h1>Publish a post</h1>
        <hr/>

        <form method="post" action="/posts">

            @include('layouts.forms-errors')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Title of your post" required>
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" id="body" class="form-control" placeholder="Content of your post" required></textarea>
            </div>

            <div class="hidden hidden-fields">
                {{ csrf_field() }}
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>
        </form>

    </div>

@endsection

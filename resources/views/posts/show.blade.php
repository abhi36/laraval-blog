@extends('layouts.master')

@section('content')

    <div class="col-sm-9">
        <h1>{{ $post->title }}</h1>

        {{ $post->body }}

        <div class="comments">
            <ul class="list-group">
                @foreach($post->comments as $comment)

                <li class="list-group-item">
                    <article>
                        <strong>{{ $comment->created_at->diffForHumans() }}</strong>
                        <em>{{$comment->body}}</em>
                    </article>
                </li>

                @endforeach
            </ul>
        </div>

        {{-- Add a comment --}}
        <div class="card">
            <div class="card-block">

                @include('layouts.forms-errors')

                <form method="post" action="/posts/{{$post->id}}/comments/">

                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea name="body" placeholder="Your comment here" class="form-control"></textarea>
                    </div>
                    <div class="hidden-fields hidden">
                        <input type="hidden" name="post_id" value="{{$post->id}}">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Comment</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection

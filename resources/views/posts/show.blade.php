@extends('layouts.master')

@section('content')

    <div class="col-sm-9">
        <h1>{{ $post->title }}</h1>

        {{ $post->body }}
    </div>

@endsection

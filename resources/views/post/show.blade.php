@extends('layouts.app')

@section('content')
    <div class="container">
        @include('post.components.post-card', ['post' => $post, 'fullContent' => true])

        @include('post.components.new-comment', ['post' => $post])

        @include('post.components.comment-list', ['post' => $post])
    </div>
@endsection
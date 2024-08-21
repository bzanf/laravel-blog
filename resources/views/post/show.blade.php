@extends('layouts.app')

@section('content')
    <div class="container">
        @include('post.components.post-card', ['post' => $post, 'fullContent' => true])
    </div>
@endsection
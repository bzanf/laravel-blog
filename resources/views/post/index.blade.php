@extends('layouts.app')

@section('content')
    <div class="container d-flex flex-wrap">
        @foreach ($posts as $post)
            <div class="col-md-4 p-2">
                @include('post.components.post-card', ['post' => $post, 'fullContent' => false])
            </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center mt-2">
        {{ $posts->links() }}
    </div>
@endsection

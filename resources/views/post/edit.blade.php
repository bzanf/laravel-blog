@extends('layouts.app')

@section('content')
    <div class="container d-flex flex-column">
        <form action="{{ route('post.update', $post) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="title">Título</label>
                <input 
                    type="text" 
                    class="form-control" 
                    id="title" 
                    name="title" 
                    value="{{ $post->title }}"
                    placeholder="Digite o título do post" 
                    required
                >
            </div>
        
            <div class="form-group mb-3">
                <label for="content">Conteúdo</label>
                <textarea 
                    class="form-control" 
                    id="content" 
                    name="content" 
                    rows="10" 
                    placeholder="Digite o conteúdo do post" 
                    required
                >{{ $post->content }}</textarea>
            </div>
        
            <div class="w-100 d-flex">
                <button type="submit" class="btn btn-primary ms-auto">Atualizar post</button>
            </div>
        </form>
    </div>
@endsection
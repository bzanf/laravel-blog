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
        
            <div class="w-100 d-flex align-items-center">
                <div class="form-check form-check-inline ms-auto">
                    <input 
                        class="form-check-input" 
                        type="radio" 
                        name="status" 
                        id="inlineRadio1" 
                        value="0" 
                        {{ $post->status === 0 ? 'checked' : '' }}
                    >
                    <label class="form-check-label" for="inlineRadio1">Rascunho</label>
                </div>
                <div class="form-check form-check-inline">
                    <input 
                        class="form-check-input" 
                        type="radio" 
                        name="status" 
                        id="inlineRadio2" 
                        value="1"
                        {{ $post->status === 1 ? 'checked' : '' }}
                    >
                    <label class="form-check-label" for="inlineRadio2">Publicado</label>
                </div>
                <button type="submit" class="btn btn-primary">Atualizar post</button>
            </div>
        </form>
    </div>
@endsection
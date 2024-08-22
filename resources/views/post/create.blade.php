@extends('layouts.app')

@section('content')
    <div class="container d-flex flex-column">
        <form action="{{ route('post.store') }}" method="POST">
            @csrf
            
            <div class="form-group mb-3">
                <label for="title">Título</label>
                <input 
                    type="text" 
                    class="form-control" 
                    id="title" 
                    name="title" 
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
                ></textarea>
            </div>
        
            <div class="w-100 d-flex">
                <button type="submit" class="btn btn-primary ms-auto">Criar post</button>
            </div>
        </form>
    </div>
@endsection
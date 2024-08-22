@auth
    <div class="mt-4">
        <h5>Deixe um comentário</h5>
        <form method="POST" action="{{ route('comment.store', ['id' => $post->id]) }}" >
            @csrf
            <div class="mb-2">
                <textarea 
                    name="content" 
                    class="form-control" 
                    rows="3"
                    placeholder="Digite seu comentário..."
                ></textarea>
            </div>
            <div class="w-100 d-flex">
                <button type="submit" class="btn btn-primary ms-auto me-0">Enviar Comentário</button>
            </div>
        </form>
    </div>
@else
    <p class="mt-4">Você precisa <a href="{{ route('login') }}">fazer login</a> para comentar.</p>
@endauth
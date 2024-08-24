<div class="card h-100">
    <div class="card-body d-flex flex-column">
        <div class="d-flex justify-content-between">
            <h4 class="mb-0">
                {{ $post->status === 0 ? '(Rascunho)' : '' }} {{ $post->title }}
            </h4>

            @can('update', $post)
                <div class="dropdown">
                    <button 
                        class="btn btn-sm" 
                        type="button" 
                        id="dropdownMenuButton1" 
                        data-bs-toggle="dropdown" 
                        aria-expanded="false"
                    >
                        <i class="bi bi-three-dots"></i>
                    </button>
    
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{ route('post.edit', $post) }}">Alterar</a></li>
                        <form action="{{ route('post.destroy', $post) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <li>
                                <button 
                                    class="dropdown-item" 
                                    onclick="return confirm('Tem certeza que deseja excluir este post?');"
                                >
                                    Remover
                                </button>
                            </li>
                        </form>
                    </ul>
                </div>
            @endcan
        </div>
        
        <div class="text-muted">
            <i class="bi bi-clock"></i>
            <span>{{ $post->created_at->setTimezone('America/Sao_Paulo')->format('d/m/Y H:i') }}</span>
            <i class="bi bi-person ms-2"></i>
            <span>{{ $post->user->name }}</span>
        </div>
        <p 
            class="card-text mt-2 mb-0 text-ellipsis overflow-hidden"
            style="{{ !$fullContent ? 'max-height: 200px' : '' }}"
        >
            {{ $post->content }}
        </p>

        @if(!$fullContent)
            <a class="pt-2 mt-auto" href="{{ route('post.show', $post) }}">Continuar leitura</a>
        @endif
    </div>
</div>
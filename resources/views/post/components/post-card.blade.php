<div class="card">
    <div class="card-body d-flex flex-column">
        <div class="d-flex justify-content-between">
            <h4 class="mb-0">{{ $post->title }}</h4>

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
                    <li><a class="dropdown-item" href="#">Edit</a></li>
                    <li><a class="dropdown-item" href="#">Delete</a></li>
                </ul>
            </div>
        </div>
        
        <span class="text-muted">{{ $post->created_at }} - {{ $post->user->name }}</span>
        <p 
            class="card-text mt-2 mb-0 text-ellipsis overflow-hidden"
            style="{{ !$fullContent ? 'max-height: 200px' : '' }}"
        >
            {{ $post->content }}
        </p>

        @if(!$fullContent)
            <a class="pt-2" href="{{ route('post.show', $post) }}">Continue reading</a>
        @endif
    </div>
</div>
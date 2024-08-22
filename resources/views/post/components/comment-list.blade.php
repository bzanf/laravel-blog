<div class="mt-4">
    <h5>Comentários ({{ $post->comments->count() }})</h5>

    <div class="d-flex flex-column gap-2">
        @foreach ($post->comments as $comment)
            <div class="p-3 border rounded">
                <div class="d-flex justify-content-between">
                    <span><strong>{{ $comment->user->name }}</strong> comentou:</span>
                    <small class="text-muted">
                        {{ $comment->created_at->setTimezone('America/Sao_Paulo')->format('d/m/Y H:i') }}
                    </small>
                </div>
                <p class="mb-0 mt-1">{{ $comment->content }}</p>
            </div>
        @endforeach
    </div>
</div>
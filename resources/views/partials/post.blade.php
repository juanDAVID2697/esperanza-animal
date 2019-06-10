<div class="col-4 mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-header"> {{ $post->tittle }} </div>
        <img src="{{ $post->picture }}" class="card-img-top" alt="{{ $post->picture }}">
        <div class="card-body">

            <p class="card-text">{{ $post->typePet }}</p>
            <p class="card-text">{{ $post->description }}</p>
            <p class="card-text">{{ $post->location }}</p>
            <p class="card-text">{{ $post->description }}</p>
            <small class="text-muted">
                {{ $post->user->email }}
                @if($post->user_id == Auth::user()->id)
                    <a class="btn btn-outline-secondary" href="{{ route('edit', $post) }}">Editar</a>
                    <form method="POST" action="{{ route('destroy', $post) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">
                            Eliminar
                        </button>
                    </form>
                @endif
            </small>


        </div>
    </div>
</div>
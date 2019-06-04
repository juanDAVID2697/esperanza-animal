<div class="col-4 mt-5">
    <div class="card" style="width: 18rem;">
      <div class="card-header"> {{ $post->tittle }} </div>
        <img src="{{ $post->picture }}" class="card-img-top" alt="{{ $post->picture }}">
        <div class="card-body">
            <h5 class="card-title">{{ $post->tittle }}</h5>
            <p class="card-text">{{ $post->typePet }}</p>
            <p class="card-text">{{ $post->description }}</p>
            <p class="card-text">{{ $post->location }}</p>
            <p class="card-text">{{ $post->description }}</p>
            <small class="text-muted">
                {{ $post->user->email }}
                @if($post->user_id == Auth::user()->id)
                    <a href="{{ route('show', $post->id) }}" class="btn btn-outline-danger">Editar</a>
                @endif
            </small>
        </div>
    </div>
</div>
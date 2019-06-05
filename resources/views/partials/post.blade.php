<div class="col-4 mt-5">
    <div class="card" style="width: 18rem;">
      <div class="card-header"> {{ $post->tittle }} </div>
        <img src="{{ $post->picture }}" class="card-img-top" alt="{{ $post->picture }}">
        <div class="card-body">
            
            <p class="card-text">{{ $post->typePet }}</p>
            <p class="card-text">{{ $post->description }}</p>
            <p class="card-text">{{ $post->location }}</p>
            <p class="card-text">{{ $post->description }}</p>
            
            <a href="/views/EditPost/{id}" class="btn btn-outline-danger">Edit</a>
        </div>
    </div>
</div>
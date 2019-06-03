@extends('layouts.app')

@section('content')

    <div class='container'>
        <a href="{{ url('/publication/post') }}" class="btn btn-success mb-5">Crear Post</a>

        <div class=row>
            @foreach($posts as $post)
                <div class="col-4 mt-5">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $post->picture }}" class="card-img-top" alt="{{ $post->picture }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->tittle }}</h5>
                            <p class="card-text">{{ $post->typePet }}</p>
                            <p class="card-text">{{ $post->description }}</p>
                            <p class="card-text">{{ $post->location }}</p>
                            <p class="card-text">{{ $post->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection
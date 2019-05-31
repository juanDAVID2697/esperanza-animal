
@extends('layouts.app')

@section('content')

<div class='container'>
<a href="{{ url('/publication/post') }}" class="btn btn-success mb-5" >Crear Post</a>

<div class=row>
@foreach($posts as $post)
  <div class="col-4 mt-5">
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
           <h5 class="card-title">{{$post->tittle}}</h5>
           <p class="card-text">{{$post->description}}</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
  </div>
@endforeach
</div>
</div>


@endsection
@extends('layouts.app')

@section('content')

    <div class='container'>
        <a href="{{ url('/publication/post') }}" class="btn btn-success mb-5"><h2> Crear Post </h2></a>
        

        <div class=row>
            @foreach($posts as $post)
                @include('partials.post')
            @endforeach
        </div>
    </div>


@endsection
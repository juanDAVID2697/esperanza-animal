@extends('layouts.app')

@section('content')

    <div class='container'>     
        <div class=row>
            @foreach($posts as $post)
                @include('partials.post')
            @endforeach
        </div>
    </div>


@endsection
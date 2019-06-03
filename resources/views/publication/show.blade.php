@extends('layouts.app')

@section('content')

    <img src="/{{ $post->picture }}" alt="{{ $post->picture }}">

    {{ $post }}

@stop
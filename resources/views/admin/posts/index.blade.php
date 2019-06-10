@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">


        <div class="container">
            <div class="section text-center">
                <div class="title m-b-md">
                    <h2> Lista de post</h2>
                </div>

                <div class="links">
                    <table class="table table-striped table-dark">
                        <thead class="thead-dark">
                        <tr>

                            <th scope="col">Id</th>
                            <th scope="col">tittle</th>
                            <th scope="col">typePet</th>
                            <th scope="col">location</th>
                            <th scope="col">picture</th>
                            <th scope="col">description</th>
                            <th class="text-right">opciones</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td class="text-center">1</td>
                                <td>{{ $post->tittle}}</td>
                                <td>{{ $post->typePet}}</td>
                                <td>{{ $post->location}}</td>
                                <td>{{ $post->picture}}</td>
                                <td>{{ $post->description}}</td>
                                <td class="text-right">
                                    <div class="btn-group">
                                        <button type="button"
                                                class="btn btn-default dropdown-toggle"
                                                data-toggle="dropdown"> opciones <span class="caret"></span>
                                        </button>

                                        <ul class="dropdown-menu" role="menu">

                                            <li><a href="{{ route('editAdminPost', $post)}}">Editar</a></li>

                                            <li>
                                                <form method="POST" action="{{ route('deletePost', $post) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger">
                                                        Eliminar
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

@stop
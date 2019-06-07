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
  @foreach ($posts as $Post)
    <tr>
    'user_id' => Auth::id(),
            'tittle' => $request->tittle,
            'typePet' => $request->typePet,
            'location' => $request->location,
            'picture' => $path,
            'description' => $request->description,

      <td class="text-center">1</td>
      <td>{{ $Post->tittle}}</td>
      <td>{{ $Post->typePet}}</td>
      <td>{{ $Post->location}}</td>
      <td>{{ $Post->picture}}</td>
      <td>{{ $Post->description}}</td>
      <td class="text-right">
        <div class="btn-group">
           <button type="button" 
                   class="btn btn-default dropdown-toggle"
                   data-toggle="dropdown"> opciones <span class="caret"></span>
           </button>

  <ul class="dropdown-menu" role="menu">
  
    <li><a href="{{ url()}}">Editar</a></li>

    <li><a href="{{ url()}}">Eliminar</a></li>
  </ul>
</div></td>
    </tr>
    @endforeach
<a href="{{ url ()}}" class="btn btn-primary">nuevo post</a>
  </tbody>
  
</table>


@stop
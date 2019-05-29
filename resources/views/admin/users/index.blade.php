@extends('layouts.app')





@section('content')
<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
            <div class="section text-center">
                <div class="title m-b-md">
                  <h2> Lista de usuarios</h2>
                </div>

                <div class="links">
 <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">LastName</th>
      <th scope="col">Phone</th>
      <th scope="col">email</th>
      <th scope="col">Password</th>
      <th class="text-right">opciones</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($users as $User)
    <tr>
      <td class="text-center">1</td>
      <td>{{ $User->name}}</td>
      <td>{{ $User->lastName}}</td>
      <td>{{ $User->phone}}</td>
      <td>{{ $User->email}}</td>
      <td>{{ $User->password}}</td>
      <td class="text-right"><div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle"
          data-toggle="dropdown">
    opciones <span class="caret"></span>
  </button>

  <ul class="dropdown-menu" role="menu">
    <li><a href="#">Editar</a></li>
    <li><a href="#">Eliminar</a></li>
  </ul>
</div></td>
    </tr>
    @endforeach
  </tbody>
</table>

@stop
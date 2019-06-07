@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        <strong>
                            {{ session()->get('success')}}

                            <a href="{{url('/home')}}" class="btn btn-outline-danger">Ver posts</a>
                        </strong>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header"><h1> POST </h1></div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('registerPost') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="tittle" class="col-md-4 col-form-label text-md-right"> Titulo </label>

                                <div class="col-md-6">
                                    <input id="tittle" type="text"
                                           class="form-control @error('tittle') is-invalid @enderror" tittle="tittle"
                                           value="{{ old('tittle') }}" required autocomplete="tittle" autofocus
                                           name="tittle">

                                    @error('tittle')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="typePet" class="col-md-4 col-form-label text-md-right"> Animal </label>

                                <div class="col-md-6">
                                    <input id="typePet" type="typePet"
                                           class="form-control @error('typePet') is-invalid @enderror" tittle="typePet"
                                           value="{{ old('typePet') }}" required autocomplete="typePet" name="typePet">

                                    @error('typePet')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="location" class="col-md-4 col-form-label text-md-right"> Ubicación </label>

                                <div class="col-md-6">
                                    <input id="location" type="location"
                                           class="form-control @error('location') is-invalid @enderror"
                                           tittle="location" required autocomplete="new-location" name="location">

                                    @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">
                                    Descripción </label>

                                <div class="col-md-6">
                                    <input id="description" type="text"
                                           class="form-control @error('description') is-invalid @enderror"
                                           tittle="description" required autocomplete="new-description"
                                           name="description">

                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01" name="picture">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-success"> Publicar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
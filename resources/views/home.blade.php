@extends('layouts.app')
<style>
img {
    width: 100%;
    padding: 20px;
    vertical-align: middle;
}
</style>
@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Scrivi un nuovo articolo</div>
                <div class="card-header">
                Consiglio: se devi implementare del codice, usa il tag tag "code" all'interno di un paragrafo.
                </div>

                <div class="card-body">
                    <form method="POST" action="article">
                        @csrf
                        <div class="form-group row">
                            <label for="argument" class="col-md-4 col-form-label text-md-right">Argomento</label>
                            <div class="col-md-6">
                            <select class="form-control" id="argument" name="argument">
                            @foreach($arguments as $arg)
                                <option value="{{ $arg->id }}">{{ $arg->title }}</option>
                            @endforeach
                            </select>
                          </div>
                          </div>
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Titolo</label>

                            <div class="col-md-6">
                                <input id="title" value="" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-md-12">
                            <textarea id="body" class="form-control @error('body') is-invalid @enderror" name="body" class="form-control" rows="3" required autofocus>{{ old('body') }}</textarea>
                                

                                @error('body')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Crea articolo
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crea un nuovo argomento</div>

                <div class="card-body">
                    <form method="POST" action="argument">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Titolo</label>

                            <div class="col-md-6">
                                <input id="title" value="" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">Url Immagine</label>

                            <div class="col-md-6">
                                <input id="image" value="" type="text" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autofocus>

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Crea Argomento
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection

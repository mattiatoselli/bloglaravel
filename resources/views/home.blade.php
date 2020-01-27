@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Scrivi un nuovo articolo</div>
                <div class="card-header">
                Consiglio: se devi implementare del codice, circondalo coi tag "pre" e "code"
                in questo modo manterrai l'identazione del codice nell'articolo.
                </div>

                <div class="card-body">
                    <form method="POST" action="article">
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
                            <label for="body" class="col-md-4 col-form-label text-md-right">Articolo</label>

                            <div class="col-md-6">
                            <textarea id="body" class="form-control @error('body') is-invalid @enderror" name="body" class="form-control" rows="3">Inserisci un bell'articolo...</textarea>
                                

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
                                    Modifica
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

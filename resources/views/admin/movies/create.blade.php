@extends('layouts.admin')
@section('content')
<div class="container text-white">
    <div class="row">
        <div class="col-12 text-center m-4">
            <h2 class="text-white">Aggiungi nuovo movies</h2>
        </div>
        @if($errors->any())
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        @endif
        <div class="col-12">
            <form action="{{route('admin.movies.store')}}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label class="control-label mb-2">
                    Titolo
                </label>
                <input type="text" class="form-control" placeholder="Titolo" id="title" name ="title">
                    @error('title')
                    <div class="alert alert-danger mt-2">{{$message}}</div>
                    @enderror
            </div>
            <div class="form-group mb-3">
                <label class="control-label mb-2">
                    Titolo originale
                </label>
                <input type="text" class="form-control" placeholder="Titolo originale" id="original_title" name ="original_title">
                    @error('original_title')
                    <div class="alert alert-danger mt-2">{{$message}}</div>
                    @enderror
            </div>
            <div class="form-group mb-3">
                <label class="control-label mb-2">
                    Vote
                </label>
                <input type="number" class="form-control" id="vote" name ="vote">
                    @error('vote')
                    <div class="alert alert-danger mt-2">{{$message}}</div>
                    @enderror
            </div>
            <div class="form-group mb-3">
                <label class="control-label mb-2">
                    Cover
                </label>
                <input type="text" class="form-control" placeholder="Titolo originale" id="cover_path" name ="cover_path">
                    @error('cover_path')
                    <div class="alert alert-danger mt-2">{{$message}}</div>
                    @enderror
            </div>
            <div class="form-group mb-3">
                <label class="control-label mb-2">
                    Data
                </label>
                <input type="date" class="form-control" placeholder="Data" name="release_date">
                    @error('release_date')
                        <div class="alert alert-danger mt-2">{{$message}}</div>
                    @enderror
            </div>
            <div class="form-group mb-3">
                <label class="control-label">Genere</label>
                <select class="form-control" name="genre_id" id="genre_id">
                    @foreach($genres as $genre)
                    <option value="{{$genre->id}}">{{$genre->genre}}</option>
                    @endforeach
                    @error('genre_id')
                        <div class="text-danger">{{message}}</div>
                    @enderror
                </select>
            </div>
            <div class="form-goup mb-3">
                <label for="" class="control-label">Attori</label>
                @foreach($casts as $cast)
                <div class="row">
                    <div class="col-3 form-check @error('casts') is-invalid @enderror">
                        <input type="checkbox" name="casts[]" class="form-check-input" value={{$cast->id}}>
                        <label class="form-check-label">{{$cast->nome_cognome}}</label>
                    </div>
                </div>
                @endforeach
                @error('casts')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="control-label mb-2">
                    Nazionalit??
                </label>
                <textarea type="text-area" class="form-control" placeholder="Nazionalit??" id="nationality" name ="nationality"></textarea>
            </div>
            <div class="form-group mb-3">
                <button type="submit" class="btnblue">Salva</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
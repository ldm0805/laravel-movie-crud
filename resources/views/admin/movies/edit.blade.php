@extends('layouts.admin')
@section('content')
<div class="container text-white">
    <div class="row">
        <div class="col-12 text-center m-4">
            <h2 class="text-white">Modifica questo movies</h2>
        </div>
        <div class="col-12">
            <form action="{{route('admin.movies.update', $movie->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label class="control-label mb-2">
                    Titolo
                </label>
                <input type="text" class="form-control" placeholder="Titolo" id="title" name ="title" value="{{old('title') ?? $movie->title}}">
                    @error('title')
                    <div class="alert alert-danger mt-2">{{$message}}</div>
                    @enderror
            </div>
            <div class="form-group mb-3">
                <label class="control-label mb-2">
                    Titolo originale
                </label>
                <input type="text" class="form-control" placeholder="Titolo" id="original_title" name ="original_title" value="{{old('original_title') ?? $movie->original_title}}">
                    @error('original_title')
                    <div class="alert alert-danger mt-2">{{$message}}</div>
                    @enderror
            </div>
            <div class="form-group mb-3">
                <label class="control-label mb-2">
                    Voto
                </label>
                <input type="number" class="form-control" placeholder="Titolo" id="vote" name ="vote" value="{{old('vote') ?? $movie->vote}}">
                    @error('vote')
                    <div class="alert alert-danger mt-2">{{$message}}</div>
                    @enderror
            </div>
            <div class="form-group mb-3">
                <label class="control-label mb-2">
                    Cover
                </label>
                <input type="text" class="form-control" placeholder="Titolo originale" id="cover_path" name ="cover_path" value="{{old('cover_path') ?? $movie->cover_path}}">
                    @error('cover_path')
                    <div class="alert alert-danger mt-2">{{$message}}</div>
                    @enderror
            </div>
            <div class="form-group mb-3">
                <label class="control-label mb-2">
                    Data
                </label>
                <input type="date" class="form-control" placeholder="Data" name="release_date" value="{{old('release_date') ?? $movie->release_date}}">
                    @error('release_date')
                        <div class="alert alert-danger mt-2">{{$message}}</div>
                    @enderror
            </div>
            <div class="form-group mb-3">
                <label class="control-label">Genere</label>
                <select class="form-control" name="genre_id" id="genre_id">
                    @foreach($genres as $genre)
                    <option value="{{$genre->id}}" {{$genre->id == old('genre_id', $movie->genre_id) ? 'selected' : ''}}>{{$genre->genre}}</option>
                    @endforeach
                    @error('genre_id')
                        <div class="text-danger">{{message}}</div>
                    @enderror
                </select>
            </div>
            <div class="form-group mb-3">
                <label class="control-label mb-2">
                    Nazionalità
                </label>
                <textarea type="text-area" class="form-control" placeholder="Nazionalità" id="nationality" name ="nationality">{{old('nationality') ?? $movie->nationality}}</textarea>
            </div>
            <div class="form-group mb-3">
                <button type="submit" class="btnblue">Salva</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
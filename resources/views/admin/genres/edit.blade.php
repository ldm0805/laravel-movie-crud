@extends('layouts.admin')
@section('content')
<div class="container text-white">
    <div class="row">
        <div class="col-12 text-center m-4">
            <h2 class="text-white">Aggiungi nuovo genere</h2>
        </div>
        <div class="col-12">
            <form action="{{route('admin.genres.update', $genre->slug)}}" method="POST">
                @csrf
                @method('PUT')
            <div class="form-group mb-3">
                <label class="control-label mb-2">
                    Titolo
                </label>
                <input type="text" class="form-control" placeholder="Titolo" id="genre" name ="genre">
                    @error('genre')
                    <div class="alert alert-danger mt-2">{{$message}}</div>
                    @enderror
            </div>

            <div class="form-group mb-3">
                <button type="submit" class="btnblue">Salva</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
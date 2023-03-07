@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Generi</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            @forelse($genre->movie as $movie)
            <div class="card">
                <div class="card-img-top">
                    <img src="{{$movie->cover_path}}" alt="">
                </div>
                {{$movie->title}}
            </div>
            @empty
            <div class="text-center">
                non sono presenti film per il genere selezionato
            </div>
            @endforelse
        </div>
    </div>
</div>

@endsection
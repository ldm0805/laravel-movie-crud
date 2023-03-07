@extends('layouts.admin')
@section('content')
<div class="movie_card" id="bright">
  <div class="info_section">
    <div class="movie_header">
      <img class="locandina" src="{{$movie->cover_path}}"/>
      <h3 class="text-white">Titolo: {{$movie->title}}</h3>
      <h5 class="text-white">Titolo originale: {{$movie->original_title}}</h5>
      <span class="minutes">Voto: {{$movie->vote}}</span>
    </div>
    <div class="movie_desc">
        <h5 class="text-white">
            Genre:
        </h5>
        <p class="text">
        {{$movie->genre ? $movie->genre->genre : 'nessun genere trovato'}}
      </p>
      <h6 class="text-white">Data di uscita: {{$movie->release_date}}</h6>
      <h6 class="text-white">Nazionalità: {{$movie->nationality}}</h6>
      <h6 class="text-white">Cast:
      @foreach($movie->casts as $cast)
        {{$cast->nome_cognome}}
        @if(!$loop->last),
        @endif
      @endforeach  
      </h6>

    </div>
  </div>
  <div class="blur_back bright_back"></div>
</div>

@endsection
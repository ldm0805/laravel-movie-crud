@extends('layouts.app')
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
            Cast:
        </h5>
        <p class="text">
        {{$movie->cast}}
      </p>
      <h6 class="text-white">Data di uscita: {{$movie->release_date}}</h6>
      <h6 class="text-white">Nazionalità: {{$movie->nationality}}</h6>
    </div>
  </div>
  <div class="blur_back bright_back"></div>
</div>

@endsection
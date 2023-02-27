@extends('layouts.app')

@section('content')
{{-- card template --}}

<div id="card-template" class="cellphone-container d-flex flex-wrap">
      
    @foreach ($movies as $item)
                <div class="movie">       
                  <div class="movie-img">
                    <img src="{{ $item['cover_path'] }}" alt="Card image cap">
                  </div>
                  <div class="text-movie-cont">
                    <div class="mr-grid">
                      <div class="">
                        <h3 class="mt-6">{{ $item['title'] }}</h3>
                        <ul class="movie-gen">
                            <li>{{ $item['release_date'] }}</li>
                          <li>{{ $item['nationality'] }}</li>
                        </ul>
                      </div>
                    </div>
                    <div class="mr-grid summary-row">
                      <div class="">
                        <span class="movie-likes">
                            Voto: {{ $item['vote'] }}
                        </span>
                      </div>
                    </div>
                    <div class="mr-grid">
                      <div class="">
                        <p class="movie-description">
                          {{ $item['cast'] }}
                        </div>
                    </div>
                    <div>
                      <a class="btn btn-success" href="{{ route('movies.show', ['movie' => $item['id']]) }}">Visualizza comic</a>
                        <form action="{{route('movies.destroy', ['movie' => $item['id']] )}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <input class="btn btn-danger" type="submit" name="" id="" value="Cancella comic">
                        </form>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>

@endsection
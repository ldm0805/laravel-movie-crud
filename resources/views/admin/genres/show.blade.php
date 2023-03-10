@extends('layouts.admin')
@section('content')
<div id="card-template" class="cellphone-container d-flex flex-wrap"> 
    @forelse($genre->movie as $movie)
      <div class="movie d-flex flex-column justify-content-between rounded-4">       
        <div class="movie-img ">
          <img src="{{ $movie['cover_path'] }}" alt="Card image cap">
        </div>
        <div class="text-movie-cont mb-auto p-2">
          <div class="mr-grid">
            <div class="align-top">
              <h3>{{ $movie['title'] }}</h3>
              <ul class="movie-gen">
                  <li>{{ $movie['release_date'] }}</li>
                <li>{{ $movie['nationality'] }}</li>
              </ul>
            </div>
          </div>
          <div class="mr-grid summary-row">
            <div class="">
              <span class="movie-likes">
                  Voto: {{ $movie['vote'] }}
              </span>
            </div>
          </div>
          <div class="mr-grid">
            <div class="">
              <p class="movie-description">
                {{ $movie['cast'] }}
              </div>
          </div>
        </div>
        <div class="d-flex m-2">
          <a class="btn btn-outline-light m-2" href="{{ route('admin.movies.edit', ['movie' => $movie['id']]) }}"><i class="fa-regular fa-pen-to-square"></i>Modifica</a>
          <a class="btn btn-outline-light m-2" href="{{ route('admin.movies.show', ['movie' => $movie['id']]) }}"><i class="fa-solid fa-circle-info"></i> info</a>
            <form action="{{route('admin.movies.destroy', ['movie' => $movie['id']] )}}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-outline-danger m-2 confirm-delete-button">
                <i class="fa fa-trash"></i> Elimina
            </button>
            </form>
        </div>
      </div>
      @empty
          <div class="container">
              <div class="row justify-content-center mt-5">
                  <div class="col-lg-8 col-md-10 col-sm-12">
                      <div class="alert alert-primary text-center" role="alert">
                          <h4 class="alert-heading mb-4">Il database dei tuoi Movies ?? vuoto</h4>
                          <p class="lead">Clicca sul pulsante "Aggiungi Movies" per aggiungerli.</p>
                      </div>
                  </div>
              </div>
          </div>
        @endforelse
        @include ('admin.partials.modals')
  </div>

@endsection
@extends('layouts.admin')

@section('content')
{{-- card template --}}

<div id="card-template" class="cellphone-container d-flex flex-wrap">
      
    @foreach ($movies as $item)
                <div class="movie d-flex flex-column justify-content-between ">       
                  <div class="movie-img ">
                    <img src="{{ $item['cover_path'] }}" alt="Card image cap">
                  </div>
                  <div class="text-movie-cont mb-auto p-2">
                    <div class="mr-grid">
                      <div class="align-top">
                        <h3>{{ $item['title'] }}</h3>
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
                  </div>
                  <div class="d-flex">
                    <a class="btn btn-outline-light m-2" href="{{ route('admin.movies.show', ['movie' => $item['id']]) }}"><i class="fa-solid fa-circle-info"></i> info</a>
                      <form action="{{route('admin.movies.destroy', ['movie' => $item['id']] )}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger m-2">
                          <i class="fa fa-trash"></i> Elimina
                      </button>
                      </form>
                  </div>
                </div>
                @endforeach
              </div>

@endsection
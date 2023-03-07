@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2>Lista generi</h2>
            </div>
            <div class="col-6">
                <a href="#" class="btn btn-sm btn-primary">Aggiungi genere</a>
            </div>
        </div>
        <div id="card-template" class="cellphone-container d-flex flex-wrap"> 
            @forelse ($genres as $item)
              <div class="movie d-flex flex-column justify-content-between rounded-4">       
                <div class="text-movie-cont mb-auto p-2">
                  <div class="mr-grid">
                    <div class="align-top">
                      <h3>{{ $item->id }}</h3>
                      <ul class="movie-gen">
                          <li>{{ $item->genre }}</li>
                        <li>{{ $item->slug }}</li>
                      </ul>
                    </div>
                  </div>
                  </div>
                </div>
                {{-- <div class="d-flex m-2">
                  <a class="btn btn-outline-light m-2" href="{{ route('admin.genres.edit', ['genre' => $item['id']]) }}"><i class="fa-regular fa-pen-to-square"></i>Modifica</a>
                  <a class="btn btn-outline-light m-2" href="{{ route('admin.genres.show', ['genre' => $item['id']]) }}"><i class="fa-solid fa-circle-info"></i> info</a>
                    <form action="{{route('admin.genres.destroy', ['genre' => $item['id']] )}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-outline-danger m-2 confirm-delete-button">
                        <i class="fa fa-trash"></i> Elimina
                    </button>
                    </form>
                </div> --}}
              </div>
              @empty
                  <div class="container">
                      <div class="row justify-content-center mt-5">
                          <div class="col-lg-8 col-md-10 col-sm-12">
                              <div class="alert alert-primary text-center" role="alert">
                                  <h4 class="alert-heading mb-4">Il database dei tuoi Movies è vuoto</h4>
                                  <p class="lead">Clicca sul pulsante "Aggiungi Movies" per aggiungerli.</p>
                              </div>
                          </div>
                      </div>
                  </div>
                @endforelse
                @include ('admin.partials.modals')
          </div>
    </div>
@endsection
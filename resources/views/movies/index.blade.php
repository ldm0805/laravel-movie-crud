@extends('layouts.app')

@section('content')

{{-- <div class="d-flex flex-wrap justify-content-center">
    @foreach ($movies as $item)
    <div class="card col-4 m-3" style="width: 18rem;">
        <img class="card-img-top" src="{{ $item['cover_path'] }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{ $item['title'] }}</h5>
            <h6 class="card-title">{{ $item['original_title'] }}</h6>
            <p class="card-text">{{ $item['cast'] }}</p>
            <p class="card-text">{{ $item['nationality'] }}</p>
            <p class="card-text">{{ $item['release_date'] }}</p>
            <p class="card-text">{{ $item['vote'] }}</p>
            <div>
                <form action="{{route('movies.destroy', ['movie' => $item['id']] )}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <input class="btn btn-danger" type="submit" name="" id="" value="cancella">
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div> --}}
{{-- card template --}}
<div class="d-flex flex-wrap justify-content-center">
    @foreach ($movies as $item)
    <div id="card-template">
        <div class="container">
            <div class="cellphone-container">    
                <div class="movie">       
                  <div class="movie-img">
                    <img src="{{ $item['cover_path'] }}" alt="Card image cap">
                  </div>
                  <div class="text-movie-cont">
                    <div class="mr-grid">
                      <div class="col1">
                        <h1>{{ $item['title'] }}</h1>
                        <ul class="movie-gen">
                            <li>{{ $item['release_date'] }} /</li>
                          <li>2h 49min  /</li>
                          <li>{{ $item['nationality'] }}</li>
                        </ul>
                      </div>
                    </div>
                    <div class="mr-grid summary-row">
                      <div class="col2">
                        <h5>SUMMARY</h5>
                      </div>
                      <div class="col2">
                        <span class="movie-likes">
                            voto: {{ $item['vote'] }}
                        </span>
                      </div>
                    </div>
                    <div class="mr-grid">
                      <div class="col1">
                        <p class="movie-description">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio at accusamus iure nihil in eaque officia earum excepturi molestiae pariatur, alias aliquam incidunt. Sequi eligendi excepturi accusamus libero! Aperiam, facere?
                        </div>
                    </div>
                    <div class="mr-grid actors-row">
                      <div class="col1">
                        <p class="movie-actors">{{ $item['cast'] }}</p>
                      </div>
                    </div>
                    <div>
                        <form action="{{route('movies.destroy', ['movie' => $item['id']] )}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <input class="btn btn-danger" type="submit" name="" id="" value="cancella">
                        </form>
                    </div>
                  </div>
                </div>
            </div>
          </div>
    </div>
    @endforeach
</div>
@endsection
@extends('layouts.app')

@section('content')

<div class="d-flex flex-wrap justify-content-center">
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
        </div>
    </div>
    @endforeach
</div>

@endsection
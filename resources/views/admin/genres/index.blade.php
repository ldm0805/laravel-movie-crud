@extends('layouts.admin')
@section('content')
  <div class="m-3">
    <a href="{{route('admin.genres.create')}}">
    <button class="btn btn-sm btn-primary">
      aggiungi genere
    </button>
    </a>
  </div>
    <div>
      <h1>generi</h1>
    </div>
      <table class="table table-striped table-bordered">
          <thead class="thead-dark text-white">
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Slug</th>
              <th>Azioni</th>
            </tr>
          </thead>
      @foreach ($genres as $type)
          <tbody>
            <tr class="align-middle">
              <td class="text-white">{{$type->id}}</td>
              <td class="text-white">{{$type->genre}}</td>
              <td class="text-white">{{$type->slug}}</td>
              <td class="col-sm-3"> 
                  <div class="d-flex justify-content-around">
                      <a class="btn btn-outline-primary m-2 btn-sm btn-square" href="{{route('admin.genres.show', $type->slug)}}" title="Visualizza type"><i class="fas fa-eye"></i></a>
                      <a class="btn btn-outline-warning m-2 btn-sm btn-square" href="{{route('admin.genres.edit', $type->slug)}}" title="Modifica type"><i class="fas fa-edit"></i></a>
                      <form class="d-inline-block" action="{{route('admin.genres.destroy', $type->slug)}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-outline-danger m-2 btn-sm btn-square confirm-delete-button" type="submit" title="Cancella">
                              <i class="fas fa-trash"></i>
                          </button>
                      </form>
                  </div>
              </td>
            </tr>
          </tbody>
          @endforeach
      </table>
      @include ('admin.partials.modals')
@endsection
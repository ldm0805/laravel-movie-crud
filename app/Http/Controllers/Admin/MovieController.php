<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Genre;
use App\Models\Cast;


use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateMovieRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMovieRequest;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        $casts = Cast::all();

        return view('admin.movies.index', compact('movies','casts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::all();
        $casts = Cast::all();
        return view('admin.movies.create', compact('genres','casts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMovieRequest $request)
    {
        $form_data = $request->validated();
        
        $slug = Movie::generateSlug($request->title, '-');
        
        $form_data['slug'] = $slug;
        
        $newMovie = Movie::create($form_data);
        
        if($request->has('casts')){
            $newMovie->casts()->attach($request->casts);
        }
        return redirect()->route('admin.movies.index')->with('message', 'hai creato un nuovo file correttamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        return view('admin.movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        $genres = Genre::all();
        $casts = Cast::all();

        
        return view('admin.movies.edit', compact('movie','genres','casts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMovieRequest  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMovieRequest $request,Movie $movie)
    {
        $form_data = $request->validated();

        $slug = Movie::generateSlug($request->title, '-');
        
        $form_data['slug'] = $slug;
        
        $movie->update($form_data);


        if($request->has('casts')){
            $movie->casts()->sync($request->casts);
        }
        return redirect()->route('admin.movies.index')->with('message', 'Hai modificato il file correttamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('admin.movies.index')->with('message', 'La cancellazione del project '.$movie->title.' è andata a buon fine.');;
    }
}

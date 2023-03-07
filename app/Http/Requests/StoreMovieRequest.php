<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required', 'unique:movies'],
            'original_title' => ['required', 'max:70'],
            'release_date' => ['required', 'date_format:Y-m-d'],
            'nationality' => ['required', 'max:20'],
            'vote' => ['required', 'numeric', 'between:1,10'],
            'cover_path' => ['required', 'max:100'],

            'genre_id' => ['exists:genres,id'],
            'casts' => ['exists:genres,id'],
            'genre' => ['required'],
            'slug' => ['required'],


        ];
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.unique' => 'questo film esiste già',
            'original_title.required' => 'Il titolo originale è obbligatorio',
            'original_title.max' => 'Il titolo originale può essere lungo al massimo :max caratteri.',
            'release_date.date_format' => 'La data inserita non è nel formato corretto',
            'release_date.required' => 'La data è obbligatoria',
            'nationality.required' => 'La nazionalità è obbligatoria',
            'vote.required' => 'Il voto è obbligatorio',
            'cover_path.required' => 'La copertina è obbligatoria',
            'nationality.max' => 'La nazionalità può essere lungo al massimo :max caratteri.',
            'cover_path.max' => 'Il link dell\'immagine può essere lungo al massimo :max caratteri.',
            'genre_id.exists' => 'il genere non è valido',
            'casts.exists' => 'il cast non è valido',
            'genre' => 'il genere è richiesto',
            'slug' => 'lo slug è richiesto'


        ];
    }
}
